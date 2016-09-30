<html>
	<head>
		<title></title>
		<?php $this->load->view("common/css/css_files_includes.php"); ?>
	</head>
	<body>
		<div class="container">
			<div class="panel panel-default" style="border-radius: 0px;border:0px;">
			  	<div class="panel-body">
			    	<div class="container-fluid">
	    				<?php 
	    					$this->load->view('common/navtop_customer.php');

	    					if ($curpage == 'home'){
	    						$this->load->view('templatecontent.php');
	    					}else if ($curpage == 'recipes'){
	    						$this->load->view('user/recipes/template_recipes.php');
	    					}
	    				?>
			    	</div>
			  	</div>
			</div>
		</div>

	
		<?php $this->load->view("common/js/js_files_includes.php"); ?>
	</body>
</html>