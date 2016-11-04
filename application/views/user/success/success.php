<div>
    <h1>Recipes</h1>
</div>
<hr>
    <h5> <a href="<?php echo base_url();?>">HOME</a> / RECIPES / <span style="color: #FF65AE;">PURCHASED RECIPE</span> </span></a></h5>
<hr>

<div class="col-md-12">
	<div class="text-left">
		Dear my beloved customer,
	</div>
	<div class="text-center">
		<h2 class="text-bold">Thank you for purchasing our delicious product recipes.</h2>
	</div>
	<center>
		<?php foreach($prod_sell as $ps) : ?>
			<img width="350px" class="bor-rad img-responsive" src="<?php echo base_url(); ?>public/img/<?php echo $ps->IMAGEURL;?>" />
			<div class="mar-ten">I wanted to THANK YOU for ordering our <span>"<?php echo $ps->TITLE;?>"</span> recipe.</div>
		<?php endforeach;?>
		<div class="mar-ten">We'll respond to your purchased recipe shortly. In the meantime...</div>
		<div class="pad-top">
			To view your purchased recipes, click this <a href="#" class="text-bold">link</a>.
		</div>

	</center>
</div>