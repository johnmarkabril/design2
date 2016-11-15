<?php
	$user_data_logsess = $this->session->userdata['log_sess'];
?>
		<div class="ibox no-pad-margin">
		    <div class="ibox-title">
		        <h5>Profile Picture</h5>
		    </div>
		    <div class="ibox-content">
		     	<div class="image-crop" style="height:40%;">
		            <img class="img-responsive" src="<?php echo base_url();?>public/img/prof/<?php echo $user_data_logsess->IMAGEURL; ?>">
		        </div>
		       	<div class="pad-top-ten">
		       		<center>
			        	<label title="Upload image file" for="inputImage" class="btn btn-info full-width">
			                    <input type="file" accept="image/*" name="file" id="inputImage" class="hide">
			                Upload new image
			            </label>
		            </center>
		        </div>
		        <div class="pad-top">
		            <center>
		            	<h4>Preview image</h4>
		            	<div class="img-preview img-preview-sm full-width"></div>
			            <div class="pad-top-ten">
			            	<label title="Donload image" id="download" class="btn btn-success full-width">Make this my profile</label>
			            </div>
		            </center>
		        </div>
		    </div>
		</div>