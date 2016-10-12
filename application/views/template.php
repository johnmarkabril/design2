<html>
	<head>
		<title><?php echo $title; ?></title>
		<?php $this->load->view("common/css/css_files_includes.php"); ?>
	</head>
	<body>
		<div class="container">
			<div class="panel panel-default" style="border-radius: 0px;border:0px;">
			  	<div class="panel-body">
			    	<div class="container-fluid">
	    				<?php 
	    					$this->load->view('common/navtop_customer.php');
	    					if ($curpage == 'home')
	    					{
	    						$this->load->view('templatecontent.php');
	    					}
	    					else if ($curpage == 'recipes')
	    					{
	    						$this->load->view('user/recipes/template_recipes.php');
	    					}
	    					else if ($curpage == 'contacts')
	    					{
	    						$this->load->view('user/contacts/template_contacts.php');
	    					}
	    					else if ($curpage == 'services')
	    					{
	    						$this->load->view('user/services/template_services.php');
	    					}
	    					else if ($curpage == 'events')
	    					{
	    						$this->load->view('user/events/template_events.php');
	    					}
	    					else if ($curpage == 'signup')
	    					{
	    						$this->load->view('signup.php');
	    					}
	    					else if ($curpage == 'categories')
	    					{
	    						$this->load->view('user/categories/categories_content.php');
	    					}


	    					$this->load->view('templatefooter.php');
	    				?>
			    	</div>
			  	</div>
			</div>
		</div>

		<!-- <div id="map"></div> -->
	
		<?php $this->load->view("common/js/js_files_includes.php"); ?>
	</body>
</html>