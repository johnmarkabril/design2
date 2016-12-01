<div class="ibox loat-e-margins no-margins">
    <div class="ibox-title">
        <h5>Preview - About My Site</h5>
        <span class="pull-right">
            <a href="#" class="btn btn-link no-padding btn-sm" data-toggle="modal" data-target="#createModal">Create</a>
        </span>

    </div>
    <div class="ibox-content full-height">
       	<div class="no-margins">
       		<div class="row">
                <div class="col-sm-12">
                    <?php 
                        if ( !empty ( $spec_aboutmysite ) ) {
                            foreach ( $spec_aboutmysite as $sa ) :
                    ?>
                                <form role="form">
                                    <input type="text" hidden value="<?php echo $sa->NO;?>" id="update_about_no" />
                                    <center>
                                        <div class="form-group">
                                            <img class="img-responsive " style="height: 150px; width: 150px;" src="<?php echo base_url(); ?>public/img/<?php echo $sa->IMAGEURL;?>"/>
                                            <span>Image <input type="file" id="update_about_image"/></span>
                                        </div>
                                    </center>
                                    <div class="form-group">
                                    	<label>Title</label> 
                                    	<input type="text" placeholder="Enter title" id="update_about_title" class="form-control" value="<?php echo $sa->TITLE;?>" >
                                    </div>
                                    <div class="form-group">
                                    	<label>Description</label> 
                                    	<textarea placeholder="Enter description" id="update_about_desc" class="form-control" style="max-width: 100%;max-height: 20%;min-height: 20%;"><?php echo $sa->DESCRIPTION;?></textarea>
                                    </div>
                                    <div>
                                        <button class="btn btn-success" type="submit" id="btn_about_update">
                                        	<strong>Update</strong>
                                        </button>
                                    </div>
                                </form>
                    <?php 
                            endforeach;
                        } else {
                            echo "Please click an item on left side!";
                        }
                    ?>
                </div>
            </div>
       	</div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="modalCreate">
  	<div class="modal-dialog" role="document">
	    <div class="modal-content">
	      	<div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Create Another About My Site</h4>
	      	</div>
	      	<div class="modal-body">
	      		<form role="form">
                    <div class="form-group">
	                    <label>Title</label> 
	                    <input type="text" placeholder="Enter title" id="txt_about_title" class="form-control" required/>
                    </div>
                    <div class="form-group">
                     	<input type="file" id="file_about" required/>
                    </div>
                    <div class="form-group">
                     	<label>Description</label> 
                     	<textarea placeholder="Enter description" id="txt_about_desc" class="form-control" style="max-width: 100%;max-height: 20%;min-height: 20%;" required></textarea>
                    </div>
                    <div>
                        <button class="btn btn-success full-width" type="button" id="btn_aboutMySite_save">
                        	<strong>Save</strong>
                        </button>
                    </div>
                </form>
	      	</div>
	    </div>
  	</div>
</div>