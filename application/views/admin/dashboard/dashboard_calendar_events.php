        <div class="row">
            <div class="col-md-12 padding-bottom">
                <div class="ibox float-e-margins no-margins">
                    <div class="ibox-title">
                        <h4>
                            Calendar Events
                            <span class="pull-right"><button class="btn-link" data-toggle="modal" data-target="#createModalCalendar">Create</button></span>
                        </h4>
                    </div>
                    <div class="ibox-content">
                        
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>


<!-- Modal -->
<div class="modal fade" id="createModalCalendar" tabindex="-1" role="dialog" aria-labelledby="modalCreate">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Calendar Events</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" id="eventCal_title" />
                </div>
                <div class="form-group has-feedback has-feedback-left">
                    <label>Start</label>
                    <input type="text" class="form-control" value="" placeholder="MM-DD-YYYY" id="eventCal_start" />
                    <i class="form-control-feedback glyphicon glyphicon-calendar"></i>
                </div>
                <div class="form-group has-feedback has-feedback-left">
                    <label>End</label>
                    <input type="text" class="form-control" value="" placeholder="MM-DD-YYYY" id="eventCal_end" />
                    <i class="form-control-feedback glyphicon glyphicon-calendar"></i>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success pull-right">Create an Event</button>
            </div>
        </div>
    </div>
</div>