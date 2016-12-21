<div>
	<h1>Categories</h1>
</div>
<hr>
	<h5> <a href="<?php echo base_url();?>">HOME</a> / <span style="color: #FF65AE;">CATEGORIES</span> <span> / <?php echo $this->uri->segment(3);?></span></a></h5>
<hr>
<div class="row">
	<div class="col-md-8" id="productgrid_search">
		<?php
			if ( !empty($get_content_cat) ) {
		?>
			<center>
				<input type="text" class="form-control text-center search" placeholder="Search .." />
			</center>
				<div class="animated fadeInRight padding-top">
			        <div class="row">
			            <div class="list">
				            <?php foreach( $get_content_cat as $gcc ) : ?>
				                <div class="col-sm-4">
				                    <div class="ibox">
				                        <div class="ibox-content product-box">
				                            <div>
				                                <img class="img-responsive" style="width:100%;height: 30%;" src="<?php echo base_url(); ?>public/img/<?php echo $gcc->IMAGEURL;?>"/>
				                            </div>
				                            <div class="product-desc" style="height: 100px;">
				                                <left>
				                                    <small class="text-muted title"><?php echo $gcc->TITLE; ?></small>
				                                </left>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				            <?php endforeach; ?>
			            </div>
			        </div>
			    </div>
				
		<?php
			} else {
		?>
			<center>
				<h1>NO RECIPES AVAILABLE!</h1>
			</center>
		<?php
			}
		?>
	</div>
	<div class="col-md-4">
		<?php $this->load->view('templatebodycontent_right.php'); ?>
	</div>
</div>	