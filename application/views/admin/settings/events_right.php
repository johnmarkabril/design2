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
                <div class="col-sm-12">
                    
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