<?php $x = $link_data[0]; ?>
<div class="row">
	<div>
		<h5><?php print_r($x->DATE); ?></h5>
	</div>
	<div class="row col-md-12">
		<div><img src="<?php echo base_url(); ?>public/img/<?php print_r($x->IMAGEURL); ?>" class="img-responsive" /></div>
		<div>
			<h4 class="justify-text"><?php print_r($x->DESCRIPTION); ?></h4>
		</div>

			<!-- <div class="row">
				<div class="col-md-12">
					<div class="col-md-4 text-center pad-top">
						<span style="color: #95BAAE;">
							POSTED BY 
						</span>
						<span class="admin-hover-black">
							<a href="#"><?php print_r($x->NAME); ?></a>
						</span>
					</div>
					<div class="col-md-4 text-center pad-top">
						<span class="admin-hover-black">
							<a href="#" style="color: #FF4785;">NO COMMENTS</a>
						</span>
					</div>
					<div class="col-md-4 text-center pad-top">
						<span class="admin-hover-black">
							<a href="#">PERMALINK</a>
						</span>
					</div>
				</div>
			</div> -->
	</div>
</div>

<div class="panel panel-default no-border pad-top" >
    <div class="panel-body" style="background-color: #f5f4f6;">
    	<div class="row">
		    <div class="col-md-12">
		       	<div class="col-md-2">
		       		<img class="img-responsive text-center full-width" src="<?php echo base_url(); ?>public/img/prof4.png"/>
		       	</div>
		       	<div class="col-md-10">
		       		<div>WRITTEN BY <span style="color: #FF4785;"><?php print_r($x->NAME); ?><span></div>
		       		<div>
		       			VIEW ALL POST BY: <span style="color: #FF4785;"><?php print_r($x->ACCOUNT_TYPE); ?><span>
		       		</div>
		       	</div>
		   	</div>
		</div>
    </div>
</div>

<hr/>

<div class="text-center">
	<h2 style="font-weight: bold;">All responses</h2>
</div>

<div id="comment-section">
	<?php if($comment_post_numrow > 0) { ?>
		<?php foreach ($comment_post as $y): ?>
			<div class="panel panel-default no-border">
		        <div class="panel-body" style="background-color: #f5f4f6;">
		            <div class="row">
		                <div class="col-md-12">
		                    <div class="col-md-2">
		                        <div><img class="img-responsive  full-width text-center" src="<?php echo base_url(); ?>public/img/prof4.png"/></div>
		                        <div class="text-center"><?php echo $y->NAME; ?></div>
		                    </div>
		                    <div class="col-md-10"><div class="justify-text"><?php echo $y->COMMENTHERE; ?></div></div>
		                </div>
		                <div class="pull-right"><span style="padding-right: 20px;color: #FF4785;"><?php echo $y->DATECOMMENT; ?></span>
		                   	<span style="padding-right: 20px;"><a href="#"><b>reply</b></a></span>
		                </div>
		            </div>
		        </div>
		    </div>
		<?php endforeach; ?>
	<?php } ?>
</div>

<hr/>
<?php $this->load->view('link_commentform.php'); ?>