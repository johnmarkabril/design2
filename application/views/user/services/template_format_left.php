<?php 
	foreach($services_content_db as $cont) { 
?>
	<?php if($cont->FORMAT == "VIDEO FORMAT") { ?>
				<div class="embed-responsive embed-responsive-4by3">
		    		<iframe class="embed-responsive-item" src="<?php echo base_url(); ?>public/img/<?php echo $cont->IMAGEVIDEOURL; ?>" frameborder="0" allowfullscreen></iframe>
				</div>
	<?php } else if ($cont->FORMAT == "IMAGE FORMAT") { ?>
			<?php 
				if ( !empty( $get_latest_prod ) ) {
					foreach ( $get_latest_prod as $glp ) :
			?>
						<img src="<?php echo base_url(); ?>public/img/<?php echo $glp->IMAGEURL; ?>" class="img-responsive cursor-pointer"/>
			<?php
					endforeach;
				}
			?>
	<?php } ?>
<?php 
	}
?>
<hr/>