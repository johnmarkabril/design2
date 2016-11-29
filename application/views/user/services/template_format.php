<div class="row">
	<?php 
		foreach($services_content_db as $cont) { 
			if ( $cont->FORMAT != "SLIDESHOW FORMAT" ) {
	?>
				<div class="col-md-7">
					<?php $this->load->view('user/services/template_format_left.php'); ?>
				</div>
				<div class="col-md-5">
					<?php $this->load->view('user/services/template_format_right.php'); ?>
				</div>
	<?php 
			} else {
	?>
				<div class="col-md-12">
					<center>
						<div class="row">
							<?php
								if ( !empty ( $slide_img_prod ) ) {
							?>
								<div class="col-md-10">
							        <div id="ninja-slider" class="full-width">
							            <div class="slider-inner">
									        <ul class="no-mar">
								            	<?php
								            		foreach ( $slide_img_prod as $sip ) :
								            	?>
										                <li>
										                 	<img class="ns-img full-width" src="<?php echo base_url(); ?>public/img/<?php echo $sip->IMAGEURL; ?>"/>
										                </li>
								                <?php
								                	endforeach;
								                ?>
									        </ul>
							                <div class="fs-icon" title="Expand/Close"></div>
							            </div>
							        </div>
							    </div>
							    <div class="col-md-2">
							        <div id="thumbnail-slider">
							            <div class="inner" style="background-color: #FFFFFF;">
									        <ul>
								                <?php
								            		foreach ( $slide_img_prod as $sip ) :
								            	?>
										               	<li>
										                   	<img class="thumb" src="<?php echo base_url(); ?>public/img/<?php echo $sip->IMAGEURL; ?>"/>
										                </li>
								                <?php
								                	endforeach;
								                ?>
									        </ul>
							            </div>
							        </div>
					        	</div>
					        <?php 
					        	}
					        ?>
				        </div>
			        </center>
    			</div>
	<?php
			}
		}
	?>
</div>