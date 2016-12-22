<?php
	$user_data_logsess = $this->session->userdata['log_sess'];
	foreach ($specific_account as $sa) :
?>
		<div>
			<ul class="nav nav-pills">
				<?php if($sa->USERNAME != $user_data_logsess->USERNAME) {?>
			  		<li class="active"><a data-toggle="pill" href="#my_recp">Recipes</a></li>
				<?php } else {?>
			  		<li class="active"><a data-toggle="pill" href="#my_recp">My Recipes</a></li>
			  		<li><a data-toggle="pill" href="#pur_recp">Purchased Recipes</a></li>
			  		<li><a data-toggle="pill" href="#mes_recp">Messages</a></li>
				<?php } ?>
			</ul>
		</div>
		<div class="tab-content">
		  	<div id="my_recp" class="tab-pane fade in active">
			  	<div class="row pad-top">
					<?php 
						if (empty($postedcont))
						{
					?>
							<!-- <div class="text-center">
								<h2>No posted recipe!</h2>
							</div> -->
					<?php
						}else{
					?>
						<div id="new_recipe_section"></div>
					<?php
							foreach ($postedcont as $post) 
					:?>

						        <div class="col-md-4">
						            <div class="ibox">
						                <div class="ibox-content product-box">
						                   	<img class="img-responsive prod-prof full-width" src="<?php echo base_url();?>public/img/<?php echo $post->IMAGEURL;?>"/>
						                   	<div class="pad-top text-center">
						                   		<a href="#"><?php echo $post->TITLE;?></a>
						                   	</div>
						                    <div style="padding: 20px;">
												<a style="color: #a6a6a6;">
													<span class="glyphicon glyphicon-paperclip"></span>
												</a>
												<a style="color: #a6a6a6; float: right; padding-left: 10px;">
													<span class="glyphicon glyphicon-heart"></span>
														173
												</a>
											</div>
						                </div>
						            </div>
						        </div>
			    	<?php 	endforeach;
						}
					?>
			  	</div>
		  	</div>

		  	<div id="pur_recp" class="tab-pane fade">
			  	<div class="row pad-top">
					<?php 
						if (empty($purchased))
						{
					?>
							<!-- <div class="text-center">
								<h2>No purchased recipe!</h2>
							</div> -->

					<?php 
						}else{
							foreach ($purchased as $purc) :
					?>
				        <div class="col-md-4">
				            <div class="ibox">
				                <div class="ibox-content product-box">
				                   	<img class="img-responsive prod-prof" src="<?php echo base_url();?>public/img/<?php echo $purc->IMAGEURL;?>"/>
				                   	<div class="pad-top text-center">
				                   		<a href="#"><?php echo $purc->PRODUCT_NAME;?></a>
				                   	</div>
				                    <div style="padding: 20px;">
										<a style="color: #a6a6a6;">
											<span class="glyphicon glyphicon-paperclip"></span>
										</a>
										<a style="color: #a6a6a6; float: right; padding-left: 10px;">
											<span class="glyphicon glyphicon-heart"></span>
												173
										</a>
									</div>
				                </div>
				            </div>
				        </div>
			    	<?php 	endforeach; 
			    		}
			    	?>
			  	</div>
		  	</div>

		  	<div id="mes_recp" class="tab-pane fade">
			  	<div class="row pad-top">
			  		<!-- <div class="text-center">
						<h2>No Messages!</h2>
					</div> -->
			  	</div>
			</div>
		</div>

<?php
	endforeach;
?>