
<div class="">
			<h5> <a href="<?php echo base_url();?>">Home</a> / Post / <a href=""><span style="color: #FF4785;"><?php foreach ($link_data as $x) { echo $x->TITLE;} ?> </span></a></h5>
		<hr>
	<div class="col-md-8" id="page1">	
		<?php $this->load->view('linkcontent.php'); ?>
	</div>
	<div class="col-md-4">
		<?php $this->load->view('templatebodycontent_right.php'); ?>
	</div>
</div>