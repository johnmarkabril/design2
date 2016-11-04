<?php 

	$this->load->view('admin/dashboard/dashboard_top.php');
	$this->load->view('admin/dashboard/dashboard_regional_stat');
	echo "<div class='row'>";

	$this->load->view('admin/dashboard/dashboard_site_visits');
	$this->load->view('admin/dashboard/dashboard_user_activity'); 
	echo "</div>";
	$this->load->view('admin/dashboard/dashboard_mid.php');
	$this->load->view('admin/dashboard/dashboard_calendar_events'); 

?>
