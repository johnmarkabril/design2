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
			<?php } else {?>
				<button type="button" class="btn btn-success btn-block">Settings</button>
			<?php } ?>
		</div>

		<div>
			<hr/>
			Subscribers
			<div style="float: right;">
				<?php
					foreach ($num_subscriber as $ns){
						$subscribers = explode("|", $ns->SUBSCRIBER);
					}
					foreach ($subscribers as $subs_num) {
						$subscriber_ctr += 1;
					}
						echo $subscriber_ctr-1;
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
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque mauris sed mauris venenatis maximus. Web developer of JMAE Company
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