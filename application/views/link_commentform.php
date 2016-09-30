<div class="text-center">
	<div class="display-none"><input type="text" value="<?php print_r($link_data[0]->NO); ?>" id="post_no"/></div>
	<div class="col-md-12 border-rad-ten" style="border: 2px solid; border-color: #F5F4F6;">
	<h2 style="font-weight: bold;">Leave a comment</h2>
		<div class="pad-top-ten">
			<input type="text" id="comment_name" class="form-control" placeholder="* NAME" required/>
		</div>
		<div>
			<input type="text" id="comment_email" class="form-control" placeholder="* EMAIL" required />
		</div>
		<div>
			<textarea style="max-width: 100%;height: 150px;max-height: 150px;" id="comment_here" class="form-control" placeholder="* YOUR COMMENT HERE!" required></textarea>
		</div>
		<button id="btn_submit_comment" class="btn btn-success btn-lg no-border">SUBMIT COMMENT</button>
	</div>
</div>