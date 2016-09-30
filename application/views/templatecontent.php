<?php 
	if ($this->uri->segment(1) == 'post'){
		$this->load->view('linkmethod.php');
		$this->load->view('templatefooter.php');
	}else{
		$this->load->view('carouselimagescontent.php');
		$this->load->view('templatebodycontent.php');
	}
?>