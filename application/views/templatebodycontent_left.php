<div class="row">
	<?php foreach($posted_content as $pst_cntn){ ?>
		<!-- CONTENTS -->
		<div class="col-md-12">
			<div><?php echo $pst_cntn->DATE; ?></div>
			<div><a href="<?php echo base_url(); ?>post/link/<?php echo $pst_cntn->NO; ?>"><div style="font-size: 15px;" class="mar-top-ten"><?php echo $pst_cntn->TITLE; ?></div></a></div>
			<div class="row">
				<div class="col-md-6">
                    <div class="spiner-example">
						<div class="sk-spinner sk-spinner-cube-grid">
	                        <div class="sk-cube"></div>
	                        <div class="sk-cube"></div>
	                        <div class="sk-cube"></div>
	                        <div class="sk-cube"></div>
	                        <div class="sk-cube"></div>
	                        <div class="sk-cube"></div>
	                        <div class="sk-cube"></div>
	                        <div class="sk-cube"></div>
	                        <div class="sk-cube"></div>
	                    </div>
					</div>
					<a href="<?php echo base_url(); ?>post/link/<?php echo $pst_cntn->NO; ?>"><img src="<?php echo base_url(); ?>public/img/<?php echo $pst_cntn->IMAGEURL; ?>" class="img-responsive examplesspin" style="display: none;"/></a>
				</div>
				<div class="col-md-6">
					<div class="pad-ten">
						<div>
							<div class="justify-text">
								<?php echo substr($pst_cntn->DESCRIPTION, 0, 500); ?>
								<span><a href="<?php echo base_url(); ?>post/link/<?php echo $pst_cntn->NO; ?>" style="color: #9DE0D0;">see more...</a></span>
							</div>
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
							<span>
								<a href="#"><?php echo $pst_cntn->NAME; ?></a>
							</span>
						</div>
					</div>
				</div>


			</div>
			</h5>
			<hr/>
		</div>
		
	<?php } ?>
</div>

<h6><?php echo $links;?></h6>