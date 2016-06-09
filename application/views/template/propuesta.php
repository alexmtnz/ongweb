


<!-- dependiendo de las sidebar, ponemos un tamaño u otro, copiar esto en todos los nuevos contenidos
-->
<!-- CONTENIDO TEMPLATE -->
<?php if($display_leftsidebar==1 && $display_rightsidebar==1){?>
<div class="template_content col-lg-6 col-md-6 col-xs-12">
    <?php } elseif($display_leftsidebar==1 || $display_rightsidebar==1){ ?>
    <div class="template_content col-lg-9 col-md-9 col-xs-12">
        <?php }else{ ?>
        <div class="template_content col-lg-12 col-md-12 col-xs-12">
            <?php }?>


            <div class="container">
                <div class="row">
                    <div class="content blog blog-post col-sm-9 col-md-9">
                        <article class="post">
                            <div class="entry-content">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis, eros a suscipit sodales, tortor nibh rhoncus est, vel vestibulum velit metus id erat. Duis eu nibh nunc, non dapibus velit. Pellentesque hendrerit orci dolor. Ut et risus nisi. Mauris nisi quam, aliquam sed tristique in, euismod eu urna. Integer tincidunt condimentum odio, a consequat nibh tempus et. Nulla vulputate felis ut leo varius vehicula. </p>
                            </div>
                            <footer class="entry-meta">
                                <span class="autor-name">Mike Example</span>,
                                <span class="time">03.11.2012</span>
                                <span class="separator">|</span>
                                <span class="meta">Posted in <a href="#">Sports</a>, <a href="#">Movies</a></span>
			<span class="comments-link pull-right">
			  <a href="#"><i class="fa fa-comment"></i> <?=$num_coments?> comment(s)</a>
			</span>
                            </footer>
                        </article><!-- .post -->

                        <h3 class="title slim">Comments</h3>


                            <h3 class="sbold blog-comments-title">Comments(<?=$num_coments?>)</h3>
                            <div class="c-comment-list">
                               <?=$comentarios_html ?>
                            </div>
                            <h3 class="sbold blog-comments-title">Leave A Comment</h3>
                            <div class="blog-comments">
                                <?php if(!empty($user)){ ?>
                            <div id="formcoment">

                            <form id="leaveacoment" action="#">
                                <input type="hidden" name="id_propuesta"  value="<?=$propuesta->id_propuestacampana?>" >
                                <input type="hidden" name="id_parent"  value="0" >
                                <div class="form-group">
                                    <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control c-square"></textarea>
                                </div>
                                <div class="form-group submitbuttonform">
                                    <a type="submit" form="leaveacoment" class="submitformcoment btn blue uppercase btn-md sbold btn-block">Submit</a>
                                </div>
                            </form>
                            </div>
                                    <div id="alertacomentario"> </div>
                                <?php }else{ ?>
                                    Necesitas estar logeado para comentar
                                <?php } ?>
                        </div>

                    </div><!-- .content -->

                </div>
            </div><!-- .container -->



        </div>
        <!-- FIN CONTENIDO TEMPLATE -->

        <script>

            var ids_clicked = [];
            var id_parent=0;
            var id_comentario=0;
            var id_propuesta=<?=$propuesta->id_propuestacampana?>;

            var id_user = 0;
            <?php if(!empty($user)){ ?>
             id_user=<?=$user->id_user ?>
            <?php }?>



            $( ".butonresponse" ).click(function() {


                var idclicked =$(this).attr("id_comentario");
                id_parent=$(this).attr("id_comentario");
                id_comentario=$(this).attr("id_comentario");
                var actualformsextra= "leaveacoment-"+$(this).attr("id_comentario");
                var formhtml = '<form id="'+actualformsextra+'" action="#"> <div class="form-group">'+
                    '<input type="hidden" name="id_parent"  value="'+id_parent+'" ><input type="hidden" name="id_propuesta"  value="'+id_propuesta+'" > ' +
                    '<div class="form-group"> <textarea rows="8" name="message" placeholder="Tu comentario" class="form-control c-square"></textarea> </div>'+
                    '<div class="form-group submitbuttonform"> <a id="submitformcomentparent"   class="submitformcomentparent btn blue uppercase btn-md sbold btn-block" form="'+actualformsextra+'" >Submit</a> </div>';


                    if(!contains(ids_clicked,idclicked))
                    ids_clicked.push(idclicked);


                $(".alertacomentario").empty();

                clear_forms();

                if(id_user==0){
                    var buttonhtml = $(this).after("<div class='row-"+actualformsextra+"' ><p>Necesitas estar logeado para comentar </p>  </div>" );

                }else{
                    var buttonhtml = $(this).after("<div class='row-"+actualformsextra+"' >"+ formhtml+"</div>" );

                }

            });

            // comentario sin parent
            $( ".submitformcoment" ).click(function() {
                var form = $("#leaveacoment");
                $.ajax({
                    url: "<?=base_url()."addpropuestap" ?>",
                    type: "post",
                    data:  form.serialize() ,
                    dataType: 'json',
                    success: function (response) {
                        clear_forms();
                        if(!response.errors){
                            $("#alertacomentario").text("Comentario añadido correctamente");
                            setTimeout(
                                function()
                                {
                                    location.reload();
                                }, 1000);

                        }else{
                            $("#alertacomentario").text(response.errors);
                        }

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(errorThrown);
                    }


                });

            });

            // comentario con  parent
            $(document).on("click", "#submitformcomentparent", function(){
                console.log("Presed");

                var theForm= $(this).attr("form");
                var form = $("#"+theForm);

                $.ajax({
                    url: "<?=base_url()."addpropuestap" ?>",
                    type: "post",
                    data:  form.serialize() ,
                    dataType: 'json',
                    success: function (response) {
                        clear_forms();
                        if(!response.errors){
                            $("#alertacomentario-"+id_parent).text("Comentario añadido correctamente");
                            setTimeout(
                                function()
                                {
                                    location.reload();
                                }, 1000);
                        }else{
                            $("#alertacomentario-"+id_parent).text(response.errors);
                        }


                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(errorThrown);
                    }


                });

            });



            function clear_forms(){
                $.each( ids_clicked, function( k, v  ){
                    console.log(v);
                    $(".row-leaveacoment-"+v).remove();
                    $("#leaveacoment-"+v).remove();
                });
                $("#formcoment").remove();
                console.log(ids_clicked)
            }

            function contains(a, obj) {
                var i = a.length;
                while (i--) {
                    if (a[i] === obj) {
                        return true;
                    }
                }
                return false;
            }
        </script>