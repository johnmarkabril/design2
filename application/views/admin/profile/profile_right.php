                    <div class="ibox">
                        <div class="ibox-content">
                            <?php 
                                if ( $this->uri->segment(4) == $this->session->userdata('log_sess')->USERNAME ) {
                            ?>
                                    <h3>Change Profile Picture</h3>
                                    <form method="POST" enctype="multipart/form-data"  action="<?php echo base_url(); ?>admin/profile/updateProfileImage">
                                        <input type="file" name="image" class="file hide" required />
                                        <div class="input-group col-xs-12">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                                            <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                            <span class="input-group-btn">
                                                <button class="browse btn btn-info input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                            </span>
                                        </div>
                                        <div class="padding-top-ten">
                                            <button type="submit" name="submit" class="btn btn-primary btn-block">Change Profile Picture</button>
                                        </div>
                                    </form>
                            <?php
                                } else {
                            ?>
                                    <div class="row">
                                        <?php
                                            foreach ( $get_specific_data as $gsd ) :
                                        ?>
                                                <div class="col-md-12">
                                                    <img class="img-responsive" src="<?php echo base_url(); ?>public/img/prof/<?php echo $gsd->IMAGEURL; ?>" />
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <label><?php echo $gsd->NAME; ?></label>
                                                </div>
                                        <?php
                                            endforeach;
                                        ?>
                                    </div>
                            <?php
                                }
                            ?>
                                
                        </div>
                    </div>

                    <div class="ibox">
                        <div class="ibox-content">
                            <h3>About my self</h3>

                            <?php 
                                if ( $this->uri->segment(4) == $this->session->userdata('log_sess')->USERNAME ) {
                            ?>
                                    <div class="form-group">
                                        <textarea id="txt_about_descript" class="form-control" placeholder="About your self" style="max-height: 150px;min-height: 150px;max-width: 100%;"></textarea>
                                    </div>
                                    <button id="btn_admin_descript_update" class="btn btn-primary btn-block">Update</button>
                            <?php
                                } else {
                            ?>
                                <h4 class="text-center">
                                    <?php 
                                        foreach ( $get_spec_about_user as $gsau ) :
                                            if ( $gsau->ABOUTUS == "" ) {
                                                echo "DOESN'T SETUP";
                                            } else {
                                                echo $gsau->ABOUTUS;
                                            }
                                        endforeach;
                                    ?>
                                </h4>
                            <?php
                                }
                            ?>
                        </div>
                    </div>