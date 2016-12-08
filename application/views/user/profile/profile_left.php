<?php
	$user_data_logsess = $this->session->userdata['log_sess'];
	foreach ($specific_account as $sa) :
?>
		<div>
			<center>
				<img style="width:150px;height:150px;" class="img-responsive" src="<?php echo base_url(); ?>public/img/prof/<?php echo $sa->IMAGEURL; ?>" />
				<h3><?php echo $sa->NAME; ?></h3>
				<span class="glyphicon glyphicon-map-marker"></span> 
				<?php foreach ($get_location as $gl) { echo $gl->PLACE; } ?>
			</center>
		</div>

		<div class="pad-top">
			<?php if($sa->USERNAME != $user_data_logsess->USERNAME) {?>
				<button type="button" class="btn btn-success btn-block">Subscribe</button>
				<button type="button" class="btn btn-default btn-block">Message</button>
			<?php } else if ($curpage == 'profile') { ?>
				<a href="<?php echo base_url();?>profile/settings/<?php echo $user_data_logsess->USERNAME; ?>" class="btn btn-success btn-block">Settings</a>
			<?php } else if ($curpage == 'settings') { ?>
				<a href="<?php echo base_url();?>profile/account/<?php echo $user_data_logsess->USERNAME; ?>" class="btn btn-success btn-block">Profile</a>
				<div class="pad-top-ten">
					<form method="POST" enctype="multipart/form-data"  action="<?php echo base_url(); ?>profile/update_profile_picture">
						<input type="file" name="image" class="file hide" required />
						<label>Upload Profile Picture</label>
	    				<div class="input-group col-xs-12">
	      					<span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
	      					<input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
	      					<span class="input-group-btn">
	        					<button class="browse btn btn-info input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
	      					</span>
	    				</div>
	    				<div class="pad-top-ten">
							<button type="submit" name="submit" class="btn btn-primary btn-block">Change Profile Picture</button>
						</div>
    				</form>
				</div>
			<?php } ?>
		</div>

		<div>
			<hr/>
			Subscribers
			<div style="float: right;">
				<?php
					if (empty($num_subscriber)){
						echo 0;
					}else{
						foreach ($num_subscriber as $ns){
							$subscribers = explode("|", $ns->SUBSCRIBER);
						}
						foreach ($subscribers as $subs_num) {
							$subscriber_ctr += 1;
						}
							echo $subscriber_ctr-1;
					}
				?>
			</div>
		</div>

		<div>
			<hr/>
			Posted Recipes
			<div style="float: right;"><?php echo $num_posted;?></div>
		</div>

		<div>
			<hr/>
			Purchased Recipes
			<div style="float: right;"><?php echo $num_purchased;?></div>
		</div>

		<hr/>
		<div class="text-center">
			<h3>About <?php echo $sa->NAME; ?></h3>
			<div class="text-justify">
				<?php 
					if (!empty($get_about_user)) { 
						foreach ($get_about_user as $gas) {
							echo $gas->ABOUTUS;
						}
					} else {
						echo "No About us!";
					}
				?>
			</div>
		</div>

		<hr/>
		<div class="text-center">
			<h3>Skills</h3>
			<div class="text-justify">
				<ul class="tag-list" style="padding: 0">
					<?php 
						$sk = explode("|", $sa->SKILLS);
						foreach ($sk as $skill) {
					?>
		            		<li><a href=""><i class="fa fa-tag"></i> <?php echo $skill;?></a></li>
					<?php
						}
					?>
		        </ul>
			</div>
		</div>
<?php
	endforeach;
?>
<div class="clearfix"></div>
<div class="pad-top"></div>