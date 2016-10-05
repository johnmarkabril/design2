<?php 
	foreach($services_content_db as $cont) { 
?>
	<?php if($cont->FORMAT == "VIDEO FORMAT") { ?>
				<div class="embed-responsive embed-responsive-4by3">
		    		<iframe class="embed-responsive-item" src="<?php echo base_url(); ?>public/img/<?php echo $cont->IMAGEVIDEOURL; ?>" frameborder="0" allowfullscreen></iframe>
				</div>
	<?php }else{ ?>
				<img src="<?php echo base_url(); ?>public/img/<?php echo $cont->IMAGEVIDEOURL; ?>" class="img-responsive cursor-pointer" data-toggle="modal" data-target="#modalImageVideo"/>
	<?php } ?>
<?php 
	}
?>
<hr/>