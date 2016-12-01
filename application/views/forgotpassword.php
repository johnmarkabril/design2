<div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="FORGOT MODAL">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3 style="color: #FF6BAE;">
                    <center>
                        <strong>FORGOT PASSWORD</strong>
                        <div>
                            <small>
                                Please fill your details below
                            </small>
                        </div>
                    </center>
                </h3>
                <hr/>
                <img class="img-responsive pad-bot" src="<?php echo base_url(); ?>public/img/cakes.png"/>
                <div class="form-group no-mar">
                    <label>Email Address</label>
                    <input type="text" class="form-control no-mar" />
                </div>
                <div class="text-center">
                    Just Remebered? <a data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Sign in</a>
                </div>

            </div>
            <button class="btn btn-lg btn-info full-width" data-dismiss="modal" data-toggle="modal" data-target="#resetModal">Submit</button>
        </div>
    </div>
</div>                

<div class="modal fade" id="resetModal" tabindex="-1" role="dialog" aria-labelledby="RESET MODAL">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3 style="color: #FF6BAE;">
                    <center>
                        <strong>RESET PASSWORD</strong>
                        <div>
                            <small>
                                Please fill your details below
                            </small>
                        </div>
                    </center>
                </h3>
                <hr/>
                <img class="img-responsive pad-bot" src="<?php echo base_url(); ?>public/img/cakes.png"/>
                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" class="form-control no-mar"/>
                </div>
                <div class="form-group no-mar">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control no-mar"/>
                </div>
                <div class="text-center">
                    Just Remebered? <a data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Sign in</a>
                </div>
            </div>
            <button class="btn btn-lg btn-info full-width">Submit</button>
        </div>
    </div>
</div>                
