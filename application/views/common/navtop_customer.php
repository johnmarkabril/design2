<div class="row">
	<div class="col-md-4">
		<center><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>public/img/cakes.png" class="img-responsive" /></a></center>
	</div>
	<div class="col-md-8" style="padding-top: 15px;">
		<div>
			<nav class="nav2 navbar navbar-default" style="background-color: #ffffff;font-size: 13px; font-family: PT Serif;">
				<div class="">
				  	<div class="text-center">
				        <ul class="nav navbar-nav" style="display: inline-block;">
				            <li class="text-center">
				                <a href="<?php echo base_url();?>" class="weightninehund">HOME</a>
				            </li>
				            <li class="text-center">
				                <a href="<?php echo base_url();?>recipes" class="weightninehund">RECIPES</a>
				            </li>
				            <li class="text-center">
				                <a href="#" class="weightninehund">SERVICES</a>
				            </li>
				            <li class="text-center">
				                <a href="#" class="weightninehund">BLOG</a>
				            </li>
				            <li class="text-center">
				                <a href="<?php echo base_url();?>contacts" class="weightninehund">CONTACTS</a>
				            </li>
				            <li class="text-center">
				                <a href="#" class="weightninehund"  data-toggle="modal" data-target="#loginModal">ACCOUNT</a>
				            </li>
				        </ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>
<hr/>

<?php $this->load->view('login.php');?>