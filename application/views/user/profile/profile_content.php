<h5> <a href="<?php echo base_url();?>">HOME</a> / <span style="color: #FF65AE;">PROFILE</span> </span></a></h5>
<hr>
<div class="row">
	<div class="col-md-2">
		<?php $this->load->view('user/profile/profile_left.php'); ?>
	</div>
	<div class="col-md-7">
		<?php $this->load->view('user/profile/profile_mid.php'); ?>
	</div>
	<div class="col-md-3">
		<?php $this->load->view('user/profile/profile_right.php'); ?>
	</div>
</div>