<div class="row">
	<?php foreach($posted_content as $pst_cntn){ ?>
		<!-- CONTENTS -->
		<div class="col-md-12">
			<div><?php echo $pst_cntn->DATE; ?></div>
			<div><a href="<?php echo base_url(); ?>post/link/<?php echo $pst_cntn->NO; ?>"><h2><?php echo $pst_cntn->TITLE; ?></h2></a></div>
			<div class="row">
				<div class="col-md-6">
					<a href="<?php echo base_url(); ?>post/link/<?php echo $pst_cntn->NO; ?>"><img src="public/img/<?php echo $pst_cntn->IMAGEURL; ?>" class="img-responsive" /></a>
				</div>
				<div class="col-md-6">
					<div class="pad-ten">
						<div>
							<h5 class="justify-text">
								<?php echo substr($pst_cntn->DESCRIPTION, 0, 500); ?>
								<span><a href="<?php echo base_url(); ?>post/link/<?php echo $pst_cntn->NO; ?>" style="color: #9DE0D0;">see more...</a></span>
							</h5>
						</div>
						<div class="row">
							<div class="col-xs-12 font-ten">
							<?php $recipe = explode('|',$pst_cntn->RECIPES); ?>
							<?php 
								foreach($recipe as $rec) {
							?>
									<div class="col-xs-6">
										<?php echo $rec; ?>
									</div>
							<?php 
								}
							?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<h5>
			<div class="pad-top text-center no-pad">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-4 text-center pad-top">
							<span style="color: #95BAAE;">
								POSTED BY 
							</span>
							<span class="admin-hover-black">
								<a href="#"><?php echo $pst_cntn->NAME; ?></a>
							</span>
						</div>
						<!-- <div class="col-md-4 text-center pad-top">
							<span class="admin-hover-black">
								<a href="#" style="color: #FF4785;">NO COMMENT</a>
							</span>
						</div>
						<div class="col-md-4 text-center pad-top">
							<span class="admin-hover-black">
								<a href="#">PERMALINK</a>
							</span>
						</div> -->
					</div>
				</div>


			</div>
			</h5>
			<hr/>
		</div>
	<?php } ?>
</div>