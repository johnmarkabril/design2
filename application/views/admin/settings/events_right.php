<div class="ibox loat-e-margins no-margins">
    <div class="ibox-title">
        <h5>Preview - Events</h5>
        <span class="pull-right">
        	<a href="#" class="btn btn-link no-padding btn-sm" data-toggle="modal" data-target="#createModal">Create</a>
        </span>

    </div>
    <div class="ibox-content full-height">
       	<div class="no-margins">
       		<div class="row">
                <div class="col-md-12">
                <?php 
                    if ( ! empty( $specific_events ) ) {
                        foreach ( $specific_events as $se ) :
                ?>
                            <form role="form">
                            <input type="text" hidden value="<?php echo $se->NO;?>" id="txt_update_no" />
                                <div class="form-group">
                                  <label>Title</label> 
                                  <input type="text" id="update_events_title" class="form-control" value="<?php echo $se->TITLE;?>"></inout>
                                </div>
                                <div class="form-group">
                                  <label>Description</label>
                                  <textarea class="form-control" id="update_events_desc" style="height: 150px;"><?php echo $se->DESCRIPTION;?></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-success pull-right" type="button" id="btn_update_events">
                                      <strong>Update</strong>
                                    </button>
                                </div>
                            </form>
                  <?php
                        endforeach;
                    } else {
                        echo "Please Click an event!";
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
		        <h4 class="modal-title" id="myModalLabel">Create new event!</h4>
	      	</div>
	      	<div class="modal-body">
	      		<form role="form">
                    <div class="form-group">
	                    <label>Title</label> 
	                    <input type="text" placeholder="Enter title" id="txt_events_title" class="form-control" required/>
                    </div>
                    <div class="form-group">
                     	<label>Description</label> 
                     	<textarea placeholder="Enter description" id="txt_events_desc" class="form-control" style="max-width: 100%;max-height: 20%;min-height: 20%;" required></textarea>
                    </div>
                    <div>
                        <button class="btn btn-success full-width" type="button" id="btn_events_save">
                        	<strong>Save</strong>
                        </button>
                    </div>
                </form>
	      	</div>
	    </div>
  	</div>
</div>