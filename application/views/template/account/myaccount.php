
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
            <?php print_r($user) ?>
            </div>

        </div>
        <!-- FIN CONTENIDO TEMPLATE -->