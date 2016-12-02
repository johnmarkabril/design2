        <div class="row">
            <div class="col-md-12 padding-bottom">
                <div class="ibox float-e-margins no-margins">
                    <div class="ibox-title">
                        <h4>
                            Calendar Events
                        </h4>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="text-center">Add new event</h3>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control text-center" id="eventCal_title" />
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="eventCal_desc" class="form-control" style="max-width: 100%;min-height: 20%;max-height: 20%;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Color</label>
                                    <div id="cp2" class="input-group colorpicker-component">
                                        <input type="text" value="#00AABB" class="form-control text-center" id="eventCal_color"/>
                                        <span class="input-group-addon"><i></i></span>
                                    </div>
                                </div>
                                <div class="form-group has-feedback has-feedback-left">
                                    <label>Start Date</label>
                                    <input type="text" class="form-control text-center" value="" placeholder="YYYY-MM-DD" data-date-format='yyyy-mm-dd' id="eventCal_start" />
                                    <i class="form-control-feedback glyphicon glyphicon-calendar"></i>
                                </div>
                                <div class="form-group has-feedback has-feedback-left">
                                    <label>Start Time</label>
                                    <input type="text" class="form-control text-center" placeholder="HH:MM" id="startTime"/>
                                    <i class="form-control-feedback glyphicon glyphicon-time"></i>
                                </div>
                                <div class="form-group has-feedback has-feedback-left">
                                    <label>End Date</label>
                                    <input type="text" class="form-control text-center" value="" placeholder="YYYY-MM-DD" data-date-format='yyyy-mm-dd' id="eventCal_end" />
                                    <i class="form-control-feedback glyphicon glyphicon-calendar"></i>
                                </div>
                                <div class="form-group has-feedback has-feedback-left">
                                    <label>End Time</label>
                                    <input type="text" class="form-control text-center" placeholder="HH:MM" id="endTime"/>
                                    <i class="form-control-feedback glyphicon glyphicon-time"></i>
                                </div>
                                <input type="text" style="display:none" id="txt_event_id_update" disabled/>
                                <button class="btn btn-lg btn-success full-width" id="btn-add-event-cal">Add an event</button>
                                <div class="form-group has-feedback has-feedback-left row" id="update_group_click" style="display:none;">
                                    <div class="col-md-6">
                                        <button class="btn btn-lg btn-danger full-width" id="btn-delete-event-cal">Delete</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-lg btn-primary full-width" id="btn-update-event-cal">Update</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>