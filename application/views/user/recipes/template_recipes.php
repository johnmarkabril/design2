<div>
	<h1>Recipes</h1>
</div>
<hr>
	<h5> <a href="<?php echo base_url();?>">HOME</a> / <span style="color: #FF65AE;">RECIPES</span> </span></a></h5>
<hr>
<div class="col-md-12">
	<div class="col-md-12 pad-bot">
	<div class="pull-right dropdown">
	  	<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $selectname;?>
	  	<span class="caret"></span></button>
	  	<ul class="dropdown-menu">
		    <li><a href="<?php echo base_url();?>recipes/option/alphabetical">Alphabetically</a></li>
		    <li><a href="<?php echo base_url();?>recipes/option/ascending">Low price to Highest price</a></li>
		    <li><a href="<?php echo base_url();?>recipes/option/descending">Highest price to Low price</a></li>
	  	</ul>
	</div>
	</div>
</div>
<div class="col-md-12">
<?php
	foreach ($recipes_content as $recipe) {
?>
		<div class="col-md-4">
			<div class="panel panel-default no-border" style="background-color: #F6F6F6;">
				<div class="panel-body text-center">
					<div class="design-price-recipe">₱ <?php echo $recipe->PRICE;?></div>
				    <img src="<?php echo base_url(); ?>public/img/<?php echo $recipe->IMAGEURL;?>" class="img-responsive" />
				    <div>
				    	<a href="" style="color: #FF65AE;"><?php echo $recipe->TITLE;?></a>
				    </div>
				    <div class="pad-bot" >
				    	<?php 
				    		$desc = substr($recipe->DESCRIPTION, 0, 150);

				    		$desc = explode("|", $desc);

				    		foreach ($desc as $descrip) {
				    	?>
				    			<div class="pad-top-fiften"><?php echo $descrip; ?>..</div>
				    	<?php
				    		}
				    	?>
				    </div>

				    <form method="POST">
				    	<?php if(!$this->session->userdata('log_sess')){ ?>
						    <input type="text" name="txtno" value="<?php echo $recipe->NO; ?>" hidden disabled/>
						    <button type="submit" class="btn btn-default" disabled>Buy Now</button>
						<?php } else { ?>
						    <input type="text" name="txtno" value="<?php echo $recipe->NO; ?>" hidden/>
						    <button type="submit" class="btn btn-default">Buy Now</button>
						<?php } ?>
				    </form>
				</div>
			</div>
		</div>
<?php
	}
?>
</div>