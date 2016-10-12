<div>
	<h1>Categories</h1>
</div>
<hr>
	<h5> <a href="<?php echo base_url();?>">HOME</a> / <span style="color: #FF65AE;">CATEGORIES</span> <span> / CUPCAKES</span></a></h5>
<hr>
<center>
	<input type="text" class="form-control text-center" style="width: 30%;" placeholder="Search .." />
</center>
<div class="row">
	<div class="col-md-12">
		<?php foreach($get_content_cat as $gcc) { ?>
			<div class="col-md-4">
				<div class="panel panel-default no-border">
			  		<div class="panel-body no-pad">
			  			<div id="cat-con">
			  				<img class="img-responsive" src="<?php echo base_url(); ?>public/img/<?php echo $gcc->IMAGEURL; ?>"/>
			  			</div>
			  			<h4 style="font-weight: bold;height: 20px;" class="text-center"><a href="<?php echo base_url();?>post/link/<?php echo $gcc->NO;?>"><?php echo $gcc->TITLE;?></a></h4>
			  		</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>	