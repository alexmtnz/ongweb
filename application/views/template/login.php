
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
                <div class="content col-sm-12 col-md-12">
                    <div class="row filter-elements ">
                        <div class="col-xs-12 col-sm-6 col-md-6 box login">
                            <div class="info-box">
                                <h3 class="title">New costumers</h3>
                                <p class="descriptions">By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                <button id="new-costumers" class="btn btn-default filter-buttons" data-filter=".register">Create an Account</button>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 box login">
                        <?= $form_login ?>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 box register">
                            <div class="info-box">
                                <h3 class="title">My Account</h3>
                                <p class="descriptions">By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                <button id="login-account" class="btn btn-default filter-buttons active-form" data-filter=".login">Login an Account</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- FIN CONTENIDO TEMPLATE -->




