<html>
	<head>
		<title><?php echo $title; ?></title>
		<?php $this->load->view("common/css_files_includes_admin.php"); ?>
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
					        	switch($curpage){
					        		case 'Dashboard':
					        			echo $content;
					        			break;
					        		case 'Inbox':
					        			echo $content;
					        			break;
					        		case 'Compose Message':
					        			echo $content;
					        			break;
					        		case 'Message Detail':
					        			echo $content;
					        			break;
					        		case 'Notification':
					        			echo $content;
					        			break;
					        		case 'Reports':
					        			echo $content;
					        			break;
					        		case 'About My Site':
					        			echo $content;
					        			break;
					        		case 'Advertisements':
					        			echo $content;
					        			break;
					        		case 'PayPal Configuration':
					        			echo $content;
					        			break;
					        		case 'Product Grid':
					        			echo $content;
					        			break;
					        		case 'Product Category':
					        			echo $content;
					        			break;
					        		case 'Product Sales':
					        			echo $content;
					        			break;
					       			case 'Accounts':
					        			echo $content;
					        			break;
					        		case 'Profile':
					        			echo $content;
					        			break;
					        		case 'Reports':
					        			echo $content;
					        			break;
					        		default:
					        			echo $content;
					        			break;
					       		}
					        ?>
					    </div>

				    </div>

			   	</div>

			
		<?php 
			}
		?>

		<?php $this->load->view("common/js_files_includes_admin.php"); ?>
	</body>
</html>