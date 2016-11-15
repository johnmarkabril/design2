<h5> <a href="<?php echo base_url();?>">HOME</a> / PROFILE / <span style="color: #FF65AE;">SETTINGS</span> </span></a></h5>
<hr>
<div class="row">
	<div class="col-md-3">
		<?php $this->load->view('user/profile/profile_left.php'); ?>
	</div>
	<div class="col-md-9">
		<?php $this->load->view('user/settings/settings_right.php'); ?>
	</div>
</div>