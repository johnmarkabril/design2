<!-- SETTING UP THE DATE -->
<?php 
	date_default_timezone_set('Asia/Manila');
    $timedate = date("F j, Y g:i A");
?>

<?php 
	// IF THE SESSION IS NULL
   	if(!$this->session->userdata('log_sess')){
?>
	    <div class="text-center">
			<div class="display-none">
				<input type="text" value="<?php print_r($link_data[0]->NO); ?>" id="post_no"/>
				<input type="text" value="<?php print_r($timedate); ?>" id="timedate"/>
			</div>
			
			<div class="col-md-12 border-rad-ten  padding-top-bottom" style="border: 2px solid; border-color: #F5F4F6;">
				<h3 style="font-weight: bold;">Leave a comment</h3>
				<div class="pad-top-ten">
					<input type="text" id="comment_name" class="form-control" placeholder="* NAME" disabled />
				</div>
				<div>
					<input type="text" id="comment_email" class="form-control" placeholder="* EMAIL" disabled  />
				</div>
				<div>
					<textarea style="max-width: 100%;height: 150px;max-height: 150px;" id="comment_here" class="form-control" placeholder="* YOUR COMMENT HERE!" disabled ></textarea>
				</div>
				<button id="btn_disabled_comment" class="btn btn-default btn-lg no-border">SUBMIT COMMENT</button>
			</div>
		</div>
<?php
	// IF THE SESSION IS NOT NULL
    } else {
        $arr_ls = $this->session->userdata('log_sess');
        
?>
		<div class="text-center">
			<div class="display-none">
				<input type="text" value="<?php print_r($link_data[0]->NO); ?>" id="post_no"/>
				<input type="text" value="<?php print_r($timedate); ?>" id="timedate"/>
			</div>
			
			<div class="col-md-12 border-rad-ten  padding-top-bottom" style="border: 2px solid; border-color: #F5F4F6;">
				<h3 style="font-weight: bold;">Leave a comment</h3>
				<div class="pad-top-ten">
					<input type="text" id="comment_name" class="form-control" placeholder="* NAME" value="<?php print_r($arr_ls->NAME); ?>" disabled/>
				</div>
				<div>
					<input type="text" id="comment_email" class="form-control" placeholder="* EMAIL" value="<?php print_r($arr_ls->EMAIL); ?>" disabled/>
				</div>
				<div>
					<textarea style="max-width: 100%;height: 150px;max-height: 150px;" id="comment_here" class="form-control" placeholder="* YOUR COMMENT HERE!" required></textarea>
				</div>
				<button id="btn_submit_comment" class="btn btn-default btn-lg no-border">SUBMIT COMMENT</button>
			</div>
		</div>
<?php        
    } 
?>