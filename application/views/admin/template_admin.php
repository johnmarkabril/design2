<html>
	<head>
		<title><?php echo $title; ?></title>
		<?php $this->load->view("common/css/css_files_includes_admin.php"); ?>
	</head>

	<body>
	
		<?php 
			if ($this->session->userdata('account_type') != "Administrator") { 
				$this->session->set_flashdata('attempt_open', 'ATTEMPTING TO OPEN A PAGE. PLEASE LOGIN!');
				redirect('/');
			} else { 
		?>
				

		<div id="wrapper">

		    <?php $this->load->view('common/navside_admin.php'); ?>

		    <div id="page-wrapper" class="gray-bg">
	        	<div class="row border-bottom">
			    	<?php $this->load->view('common/navtop_admin.php'); ?>
		        </div>

		        <div class="wrapper wrapper-content">
		        	ADMIN / <?php echo strtoupper($curpage); ?>
				<hr/>
		        	<?php 
		        		if ( $curpage == 'Dashboard' ) {
		        			$this->load->view('admin/dashboard.php');
		        		} else if ( $curpage == 'Product List' ) {
		        			$this->load->view('admin/product/productlist.php');
		        		} else if ( $curpage == 'User' ) {
		        			$this->load->view('admin/user.php');
		        		} else if ( $curpage == 'Inbox' ) {
		        			$this->load->view('admin/message/inbox.php');
		        		} else if ( $curpage == 'ComposeMail' ) {
		        			$this->load->view('admin/message/compose_mail.php');
		        		} else if ( $curpage == 'Notification' ) {
		        			$this->load->view('admin/notification/notification_content.php');
		        		}
		        	?>
		        </div>
	        </div>

    	</div>

			
		<?php 
			}
		?>

		<?php $this->load->view("common/js/js_files_includes_admin.php"); ?>
	</body>
</html>