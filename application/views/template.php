<html>
	<head>
		<title><?php echo $title; ?></title>
		<?php $this->load->view("common/css_files_includes.php"); ?>
	</head>
	<body>
		<div class="container">
			<div class="panel panel-default" style="border-radius: 0px;border:0px;">
			  	<div class="panel-body">
			    	<div class="container-fluid">
	    				<?php 
	    					$this->load->view('common/navtop_customer.php');

	    					switch ($curpage)
	    					{
	    						case 'home':
	    							echo $content;
	    							break;
	    						case 'recipes':
	    							echo $content;
	    							break;
	    						case 'recipedetail':
	    							echo $content;
	    							break;
	    						case 'contacts':
	    							echo $content;
	    							break;
	    						case 'services':
	    							echo $content;
	    							break;
	    						case 'events':
	    							echo $content;
	    							break;
	    						case 'signup':
	    							echo $content;
	    							break;
	    						case 'categories':
	    							echo $content;
	    							break;
	    						case 'profile':
	    							echo $content;
	    							break;
	    						case 'success':
	    							echo $content;
	    							break;
	    						case 'settings':
	    							echo $content;
	    							break;
	    						default:
	    							echo $content;
	    							break;
	    					}
	    					// if ($curpage == 'home')
	    					// {
	    					// 	$this->load->view('templatecontent.php');
	    					// }
	    					// else if ($curpage == 'recipes')
	    					// {
	    					// 	$this->load->view('user/recipes/template_recipes.php');
	    					// }
	    					// else if ($curpage == 'contacts')
	    					// {
	    					// 	$this->load->view('user/contacts/template_contacts.php');
	    					// }
	    					// else if ($curpage == 'services')
	    					// {
	    					// 	$this->load->view('user/services/template_services.php');
	    					// }
	    					// else if ($curpage == 'events')
	    					// {
	    					// 	$this->load->view('user/events/template_events.php');
	    					// }
	    					// else if ($curpage == 'signup')
	    					// {
	    					// 	$this->load->view('signup.php');
	    					// }
	    					// else if ($curpage == 'categories')
	    					// {
	    					// 	$this->load->view('user/categories/categories_content.php');
	    					// }
	    					// else if ($curpage == 'recipedetail')
	    					// {
	    					// 	$this->load->view('user/recipes/recipes_content.php');
	    					// }
	    					// else if ($curpage == 'profile')
	    					// {
	    					// 	$this->load->view('user/profile/profile_content.php');
	    					// }
	    					// else if ($curpage == 'success')
	    					// {
	    					// 	$this->load->view('user/success/success.php');
	    					// }
	    					// else if ($curpage == 'settings')
	    					// {
	    					// 	$this->load->view('user/settings/settings.php');
	    					// }


	    					$this->load->view('templatefooter.php');
	    				?>
			    	</div>
			  	</div>
			</div>
		</div>

		<!-- <div id="map"></div> -->
	
		<?php $this->load->view("common/js_files_includes.php"); ?>
	</body>
</html>