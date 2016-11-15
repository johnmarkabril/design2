<?php
	$this->load->view('admin/dashboard/dashboard_top.php');
	$this->load->view('admin/dashboard/dashboard_regional_stat.php');
?>
	<div class="row">
<?php
	$this->load->view('admin/dashboard/dashboard_site_visits.php');
	$this->load->view('admin/dashboard/dashboard_user_activity.php');
?>
	</div>
<?php
	$this->load->view('admin/dashboard/dashboard_mid.php');
	$this->load->view('admin/dashboard/dashboard_calendar_events.php');
?>