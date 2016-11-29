<div>
	<h1>Services</h1>
</div>

<?php 
	if($servicesformat == "no") {
?>
		<hr>
			<h5> <a href="<?php echo base_url();?>">HOME</a> / <span style="color: #FF65AE;">SERVICES</span> </span></a></h5>
		<hr>
		<div class="row">
			<?php foreach ($services_content_db as $cont) { ?>

				<div class="col-md-4">
					<div class="panel panel-default no-border" style="">
						  <div class="panel-body text-center">
						    <?php if($cont->FORMAT == "VIDEO FORMAT") { ?>
						    	<div class="embed-responsive embed-responsive-4by3">
		    						<iframe class="embed-responsive-item" src="<?php echo base_url(); ?>public/img/<?php echo $cont->IMAGEVIDEOURL; ?>" frameborder="0" allowfullscreen></iframe>
								</div>
						    <?php }else{ ?>
						    	<img src="<?php echo base_url(); ?>public/img/<?php echo $cont->IMAGEVIDEOURL; ?>" class="img-responsive cursor-pointer" data-toggle="modal" data-target="#modalImageVideo"/>
						    <?php } ?>
						    <div class="pad-top-ten text-center">
						    	<a href="<?php echo base_url(); ?>services/format/<?php echo $cont->NO; ?>" class="color-pink"><?php echo $cont->FORMAT?></a>
						    </div>
						    <div class="pad-top-ten"><?php echo $cont->INFO?></div>
						  </div>
					</div>
				</div>
				
			<?php } ?>
		</div>
<?php 
	} elseif ($servicesformat == "yes") { 
?>
		<hr>
			<?php foreach ($services_content_db as $cont) { ?>
			<h5> <a href="<?php echo base_url();?>">HOME</a> / <span>SERVICES / </span><span style="color: #FF65AE;"> <?php echo $cont->FORMAT; ?> </span></a></h5>
			<?php } ?>
		<hr>
<?php
	   	$this->load->view('user/services/template_format.php');
	}
?>