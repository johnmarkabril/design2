
    <h5> <a href="<?php echo base_url();?>">HOME</a> / RECIPES / <span style="color: #FF65AE;">RECIPE DETAIL</span> </span></a></h5>
<hr>
<!-- <?php //print_r($recipe_detail); ?> -->
<?php foreach($recipe_detail as $rd) :?>
	<div class="row">
	    <div class="col-lg-12">
			<div class="ibox product-detail">
	            <div class="bor-top-no ibox-content">
	                <div class="row">
	                    <div class="col-md-5">
							<div class="product-images">
	                           	<div>
	                           		<img src="<?php echo base_url(); ?>public/img/<?php echo $rd->IMAGEURL; ?>" class="img-responsive" />
	                           	</div>
	                        </div>
	                    </div>
	                    
	                    <div class="col-md-7">
							<h2 class="font-bold m-b-xs">
	                            <?php echo $rd->TITLE; ?>
	                        </h2>
	                        <div class="m-t-md">
	                            <h2 class="product-main-price">₱ <?php echo $rd->PRICE;?></h2>
	                        </div>
	                        <hr>

	                        <h4>Product description</h4>

	                        <div class="small text-muted">
	                            <?php 
	                            	$description = $rd->DESCRIPTION;
	                            	$desc = explode('|', $description);
	                            	foreach ($desc as $des) {
	                            ?>
	                            		<div style="padding-top: 10px;">
	                            			<?php echo $des;?>
	                            		</div>
	                            <?php
	                            	}
	                            ?>
	                        </div>
	                        <dl class="small m-t-md">
	                            <dt>Product Category</dt>
	                            <dd><?php echo $rd->CATEGORIES;?></dd>
	                        </dl>
	                        <hr>

	                        <div>
	                            <button class="btn btn-outline btn-primary btn-sm" data-toggle="modal" data-target="#modalDetail"><i class="fa fa-cart-plus"></i> Buy Now</button>
	                            <button class="btn btn-outline btn-info btn-sm"><i class="fa fa-user"></i> Message the admin</button>
	                        </div>
	                    </div>
	                </div>

	            </div>
	        </div>
	    </div>
	</div>

	<div class="modal inmodal" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="modalDetail">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content animated flipInY">
	      		<div class="modal-body pad-ten">
					<div class="row">
                        <div class="col-md-12">
                        	<div>
	                           	<img src="<?php echo base_url(); ?>public/img/<?php echo $rd->IMAGEURL; ?>" class="img-responsive" />
                        	</div>
                        	<div class="text-center">
	                            <h2 class="text-center">You want to purchase this?</h2>
	                            <strong>Product:</strong> <?php echo $rd->TITLE; ?> <br/>
	                            <strong>Price:</strong> <span class="text-navy">₱ <?php echo $rd->PRICE; ?> </span>
                            </div>
                            <div class="form-group no-mar pad-top-ten">
                            	<div class="row">
                            		<div class="col-md-6">

                            			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
											<input type="hidden" name="cmd" value="_xclick">
											<input type="hidden" name="business" value="<?php echo $paypal_id;?>">
											<input type="hidden" name="custom" value="<?=$rd->TITLE;?>">
											<input type="hidden" name="item_name" value="<?php echo $rd->TITLE;?>">
											<input type="hidden" name="currency_code" value="PHP">
											<input type="hidden" name="item_number" value="<?php echo $rd->NO; ?>">
											<input type="hidden" name="amount" value="<?php echo $rd->PRICE;?>">
											<button type="submit" class="btn btn-primary btn-lg full-width" >Buy Now</button>
											<input type="hidden" name="return" value="http://template1.jmaeprovider.xyz/recipes/success">
											<input type='hidden' name='notify_url' value='http://www.template1.jmaeprovider.xyz/success'>
											<input type="hidden" name="cancel_return" value="http://template1.jmaeprovider.xyz/recipes">
										</form>
                            		</div>
                            		<div class="col-md-6">
										<button type="button" data-dismiss="modal" class="btn btn-danger btn-lg full-width" >Cancel this transaction</button>
                            		</div>
                            	</div>
                            </div>
                        </div>

                    </div>

	      		</div>
	    	</div>
	  	</div>
	</div>

<?php endforeach; ?>