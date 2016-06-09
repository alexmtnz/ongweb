
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



            <div class="row">
    <div id="catalog" class="content col-sm-12 col-md-9">
        <div class="category-img">
            <img class="replace-2x" src="content/img/category-img.jpg" width="870" height="370" alt="">
            <div class="description">Automation &amp; Integration technology to fit any lifestyle</div>
        </div>

        <div class="toolbar clearfix">
            <div class="grid-list">
                <a href="shop-catalog-grid.html" class="grid">
                    <span class="glyphicon glyphicon-th-large"></span>
                </a>
			<span class="grid">
			  <span class="glyphicon glyphicon-th-list"></span>
			</span>
            </div>

            <div class="sort-catalog">
                <div class="btn-group sort-by btn-select">
                    <a class="btn dropdown-toggle btn-default" role="button" data-toggle="dropdown" href="#">Sort by: <span>Rating</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Price</a></li>
                        <li><a href="#">Rating</a></li>
                        <li><a href="#">Name</a></li>
                    </ul>
                </div><!-- .sort-by -->
                <button type="button" class="btn up-down btn-default" data-toggle="button"><span></span></button>
            </div><!-- .sort-catalog -->

            <div class="sort-catalog">
                <div class="btn-group show-by btn-select">
                    <a class="btn dropdown-toggle btn-default" role="button" data-toggle="dropdown" href="#">Show: <span>12</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><a href="#">10</a></li>
                        <li><a href="#">11</a></li>
                        <li><a href="#">12</a></li>
                    </ul>
                </div><!-- .show -->
                <span class="per-page">per page</span>
            </div><!-- .sort-catalog -->


        </div>

        <div class="clearfix"></div>

        <div class="products list row">

            <?php foreach($propuestas as $propuesta)   {?>
            <div class="product">
                <div class="col-sm-4 col-md-4">
                    <a href="<?=base_url()."propuesta/".$propuesta->id_propuestacampana?>" class="product-image">

                        <img class="replace-2x" src="<?=base_url()?>public/img/greenpeace.jpg" alt="" title="" width="270" height="270">
                    </a>
                </div>
                <div class="col-sm-8 col-md-8">
                    <h3 class="product-name">
                        <a href="<?=base_url()."propuesta/".$propuesta->id_propuestacampana?>"><?= $propuesta->nombre ?></a>

                    </h3>
                    <div class="reviews-box">

                        <span> <span id="voto_numero_<?=$propuesta->id_propuestacampana?>"><?= $propuesta->votos ?></span> votos</span>
                        <span class="separator"></span>
                        <a href="<?=base_url()."propuesta/".$propuesta->id_propuestacampana?>" id="voto_correcto_<?=$propuesta->id_propuestacampana?>" style="color:green;" class="add-review"></a>
                    </div>
                    <div class="excerpt">
                        <?= $propuesta->descripcion ?>
                    </div>
                    <div class="price-box">
                       <p><?= $propuesta->comentarios?> comentarios </p>
                    </div>
                    <div class="actions">

                        <a id="<?= $propuesta->id_propuestacampana?>" title="vota por esta camapaña"  class="add-wishlist">

                            <svg x="0" y="0" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
				  <path fill="#1e1e1e" d="M11.335,0C10.026,0,8.848,0.541,8,1.407C7.153,0.541,5.975,0,4.667,0C2.088,0,0,2.09,0,4.667C0,12,8,16,8,16
					s8-4,8-11.333C16.001,2.09,13.913,0,11.335,0z M8,13.684C6.134,12.49,2,9.321,2,4.667C2,3.196,3.197,2,4.667,2C6,2,8,4,8,4
					s2-2,3.334-2c1.47,0,2.666,1.196,2.666,2.667C14.001,9.321,9.867,12.49,8,13.684z"></path>
				  </svg>
                        </a>

                    </div><!-- .actions -->
                </div>
            </div><!-- .product -->
                <?php }  ?>





        <div class="pagination-box">
            <ul class="pagination">
                <?php for ($k=0; $k<=$pagenums ; $k++){ ?>

                    <?php  if(($k+1) == $page){  ?>
                        <li class="active"><span><?=($k+1) ?></span></li>
                    <?php   }else{ ?>
                        <li><a href="<?= base_url()."propuestas/".($k+1) ?>"><?=($k+1)?></a></li>
                    <?php   }?>

                <?php } ?>


            </ul>
            <i class="pagination-text">Displaying 1 to 10 (of 100 posts)</i>
        </div><!-- .pagination-box -->
    </div><!-- .content -->
</div>


        </div>


            <script>
                $( document ).ready(function() {
                    $( ".add-wishlist" ).click(function() {
                       var id_user = <?php  if(empty($user)) { echo 0; }else{  echo $user->id_user;} ?>;
                        if(id_user==0){
                            alert("necesitas estar logeado para votar");
                        }else{
                            var id_propuesta =  $(this).attr('id');
                            var values = {id_propuesta:id_propuesta, id_usuario:id_user};

                            $.ajax({
                                url: "<?=base_url()."addvotes" ?>",
                                type: "post",
                                data: values ,
                                dataType: 'json',
                                success: function (response) {

                                        var chek = "#voto_correcto_"+id_propuesta;

                                     if(response.result==1){
                                    $(chek).html("has votado correctamente");
                                    // you will get response from your php page (what you echo or print)


                                     var numvoto = "#voto_numero_"+id_propuesta;
                                     var getnumero = $(numvoto).text();

                                      var numero =   parseInt(getnumero)+response.number;

                                         $(numvoto).empty();
                                         $(numvoto).html(numero);
                                         console.log(numero);
                                     }else if(response.result==0){
                                         $(chek).html("ya has votado aqui o no puedes votar tu propia propuesta");
                                    }
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    console.log(textStatus, errorThrown);
                                }


                            });

                        }

                });
                });



            </script>


      </div>  <!-- FIN CONTENIDO TEMPLATE -->