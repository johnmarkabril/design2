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
								5LOREM IPSUM DOLOR SIT AMET, CONSEC TEER ADIPISCING. PRSENT VES TIBULUM. MOLESTIE LACUIIRHS. AENEON MY HENDRERIT MAURIS.
							</h5>
						</div>
						<div>
							<h5 class="justify-text">
								Lorem ipsum dolor sit amet, consec tetuer adipi scing. Praesent vestibu lum molestie lacuiirhs. Aenean non ummy hendreriauris. Phasellllus. porta. Fusce suscipit varius mium sociis totdnatibus et magis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiatle.
								<span><a href="<?php echo base_url(); ?>post/link/<?php echo $pst_cntn->NO; ?>" style="color: #9DE0D0;">see more...</a></span>
							</h5>
						</div>
						<div class="row">
							<div class="col-xs-12 font-ten">
							<div class="col-xs-6">
								2 cups (454 g)
							</div>
							<div class="col-xs-6">
								Unsalted butter, softened and cut into cubes
							</div>
							<div class="col-xs-6">
								4-1/2 cups (565 g)
							</div>
							<div class="col-xs-6">
								Confectioners’ sugar, sifted
							</div>
							<div class="col-xs-6">
								1/4 cup (59 ml)
							</div>
							<div class="col-xs-6">
								Freshly squeezed orange juice, strained
							</div>
							<div class="col-xs-6">
								2 teaspoons (10 ml)
							</div>
							<div class="col-xs-6">
								Unflavoured gelatin (such as Knox brand)
							</div>
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