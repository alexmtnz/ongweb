
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
            <article class="content col-sm-12">
					<div class="title-wrapper ">
                                                    <h1 class="title" style="text-align:center;">Haz tu donativo para donde mas se necesite</h1>
                          			    			  </div>
													  
													  <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="payment-form">
                        <form role="form">
                            <input type="hidden" name="payment-type" id="payment-type" value="card-payment">
                            <ul class="nav nav-tabs payment-tabs">                                                 
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="card">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="card-number">Card Number</label>
                                            <input type="text" class="form-control" id="card-number" name="card-number">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="card-name">Name on Card</label>
                                            <input type="text" class="form-control" id="card-name" name="card-name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="card-date">Expiry date(MM/YY)</label>
                                            <input type="text" class="form-control" id="card-date" name="card-date">
                                        </div>
										 <div class="form-group col-sm-6">                                          
                                            <label for="card-cvv">CVV</label>
                                            <input type="text" class="form-control" id="card-cvv" name="card-cvv">
                                        </div>
                                        <div class="form-group col-sm-6" style="margin-left:12em;">                                          
                                            <label for="card-ingreso">Ingreso &euro;</label>
                                            <input type="text" class="form-control" id="card-ingeso" name="card-ingreso">
                                        </div>
                                    </div>
                                </div>
                     
                            </div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-default" style="margin-left:15.5em;">Haz tu donativo</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
															
																
            </article><!-- .content -->
        </div>

        </div>
        <!-- FIN CONTENIDO TEMPLATE -->