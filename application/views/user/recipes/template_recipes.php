<div>
	<h1>Recipes</h1>
</div>
<hr>
	<h5> <a href="<?php echo base_url();?>">HOME</a> / <span style="color: #FF65AE;">RECIPES</span> </span></a></h5>
<hr>
<div class="col-md-12">
<?php
	foreach ($recipes_content as $recipe) {
?>
		<div class="col-md-4">
			<div class="panel panel-default no-border" style="background-color: #F6F6F6;">
				<div class="panel-body text-center">
					<div class="design-price-recipe">₱ <?php echo $recipe->PRICE;?></div>
				    <img src="<?php echo base_url(); ?>public/img/r3.jpg" class="img-responsive" />
				    <div>
				    	<a href="" style="color: #FF65AE;"><?php echo $recipe->TITLE;?></a>
				    </div>
				    <div class="pad-bot" >
				    	<?php 
				    		$desc = substr($recipe->DESCRIPTION, 0, 250);

				    		$desc = explode("|", $desc);

				    		foreach ($desc as $descrip) {
				    	?>
				    			<div class="pad-top-fiften"><?php echo $descrip; ?></div>
				    	<?php
				    		}
				    	?>
				    </div>
				    <div class="btn btn-default">Buy Now</div>
				</div>
			</div>
		</div>
<?php
	}
?>
</div>