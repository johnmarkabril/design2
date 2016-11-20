<?php
	$user_data_logsess = $this->session->userdata['log_sess'];
?>
<div class="ibox no-pad-margin">
	<div class="ibox-title">
		<h5>Personal Information</h5>
	</div>
	<div class="ibox-content">
		<div class="row">

			<?php 
				foreach ($specific_account as $sa) :
			?>
				<div class="col-md-12">
					<input type="text" class="form-control" id="set_def_fullname" value="<?php echo $sa->NAME; ?>" style="display:none;">
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" id="set_def_pnum" value="<?php echo $sa->PHONENUMBER; ?>" style="display:none;">
				</div>
				<div class="col-md-6">
					<input type="email" class="form-control" id="set_def_email" value="<?php echo $sa->EMAIL; ?>" style="display:none;">
				</div>
				<div class="col-md-12">
					<input type="password" class="form-control" id="set_def_pword" value="<?php echo $sa->PASSWORD; ?>" style="display:none;">
				</div>
			<?php
				endforeach;
			?>

			<div class="col-md-6">
				<input type="text" placeholder="First name" class="form-control" id="set_per_in_fname">
			</div>
			<div class="col-md-6">
				<input type="text" placeholder="Surname" class="form-control" id="set_per_in_sname">
			</div>
			<div class="col-md-6">
				<input type="text" placeholder="Phone number" class="form-control" id="set_per_in_pnum">
			</div>
			<div class="col-md-6">
				<input type="email" placeholder="Email Address" class="form-control" id="set_per_in_email">
			</div>
			<div class="col-md-6">
				<input type="password" placeholder="New Password" class="form-control" id="set_per_in_pword">
			</div>
			<div class="col-md-6">
				<input type="password" placeholder="Confirm Password" class="form-control" id="set_per_in_conpword">
			</div>
			<button class="pull-right btn btn-success" id="set_per_in_btn_sub">Update</button>
		</div>
	</div>
</div>