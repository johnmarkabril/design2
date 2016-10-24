<div>
    <h1>Recipes</h1>
</div>
<hr>
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

	<div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="modalDetail">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-body">
					<div class="row">
                        <div class="col-md-12">
                        	<div>
	                           	<img src="<?php echo base_url(); ?>public/img/<?php echo $rd->IMAGEURL; ?>" class="img-responsive" />
                        	</div>
                            <h2 class="text-center">You want to purchase this?</h2>
                            <strong>Product:</strong> <?php echo $rd->TITLE; ?> <br/>
                            <strong>Price:</strong> <span class="text-navy">₱ <?php echo $rd->PRICE; ?> </span>

                            <p class="m-t">
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
                            </p>
                            <div class="text-center">

	                			<form action='<?php echo $paypal_url; ?>' method='post' name='frmPayPal1'>

				                    <input type='hidden' name='business' value='<?php echo $paypal_id;?>'>
				                    <input type='hidden' name='cmd' value='_xclick'>
				                    
				                    <input type='hidden' name='item_name' value='<?php echo $rd->TITLE;?>'>
                   					<input type='hidden' name='item_number' value='<?php echo $rd->NO;?>'>
                    				<input type='hidden' name='amount' value='<?php echo $rd->PRICE;?>'>
				                    
				                    <input type='hidden' name='no_shipping' value='1'>
				                    <input type='hidden' name='currency_code' value='PHP'>
				                    <input type='hidden' name='handling' value='0'>

		                            <button type="submit" class="btn btn-outline btn-success" >
		                                <img src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" class="img-responsive" />
		                            </button>
		                        </form>
                            </div>
                        </div>

                    </div>

	      		</div>
	    	</div>
	  	</div>
	</div>

<?php endforeach; ?>