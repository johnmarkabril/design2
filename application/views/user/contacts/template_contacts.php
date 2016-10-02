<div>
	<h1>Contacts</h1>
</div>
<hr>
	<h5> <a href="<?php echo base_url();?>">HOME</a> / <span style="color: #FF65AE;">CONTACTS</span> </span></a></h5>
<hr>


<div class="col-md-12">
	<div id="map" style="height: 40%; width: 100%;"></div>
	<div class="row">
		<div class="col-md-4">
			<?php $this->load->view('user/contacts/contacts_left.php'); ?>
		</div>
		<div class="col-md-8">
			<?php $this->load->view('user/contacts/contacts_right.php'); ?>
		</div>
	</div>
</div>
