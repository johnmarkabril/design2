
		<div class="ibox">
            <div class="ibox-title">
                Update PayPal Configuration Account
                <span class="pull-right"><a data-toggle="modal" data-target="#modalPayPal">Save new account!</a></span>
            </div>
            <div class="ibox-content full-height">
            	<div class="row">
	            	<div class="col-md-4">
	            		<center>
	            		<img style="height:300px;" class="img-responsive" src="<?php echo base_url(); ?>public/img/paypal.png" />
	            		</center>
	            	</div>
	            	<div class="col-md-8">
	            		<p style="text-align: justify;">PayPal Holdings, Inc. is an American company operating a worldwide online payments system that supports online money transfers and serves as an electronic alternative to traditional paper methods like checks and money orders.</p>
	            		<br/>
	                    <label>Email Address</label>
	                    <?php 
	                    	if ( empty($get_spec_paypal) ) { 
	                    ?>
                        	<input type="text" class="form-control" placeholder="example@example.com" value=""/>
                        <?php 
                    		} else { 
                    			foreach ( $get_spec_paypal as $gsp ) :
                        ?>
                        	<input type="text" class="form-control" value="<?php echo $gsp->PAYPAL_EMAIL;?>" id="txt_paypal_email_upd"/>
                        <?php 
                        		endforeach;
                        	} 
                        ?>
                        <p>
                        	<div class="form-group">
	                            <select name="status" id="paypal_email_status" class="form-control">
	                                <option value="enabled" selected>Enabled</option>
	                                <option value="disabled">Disabled</option>
	                            </select>
                        	</div>
                        </p>
	                    <br/>
	                    <button class="btn btn-primary pull-right" type="submit" id="btn_update_paypal_account">Update an PayPal account!</button>
	            	</div>
            	</div>
            </div>
        </div>