                    <div class="social-feed-box margin-bottom">
                            <div class="social-avatar">
                                <a href="" class="pull-left">
                                    <img alt="image" src="<?php echo base_url(); ?>public/img/prof/<?php echo $this->session->userdata('log_sess')->IMAGEURL; ?>">
                                </a>
                            </div>
                            <input type="text" id="txt_admin_prof_uname" value="<?php echo $this->session->userdata('log_sess')->USERNAME; ?>" hidden />
                            <input type="text" id="txt_admin_prof_imagename" value="<?php echo $this->session->userdata('log_sess')->IMAGEURL; ?>" hidden />
                            <input type="text" id="txt_admin_prof_date" value="<?php echo $date?>" hidden />
                            <input type="text" id="txt_admin_prof_hour" value="<?php echo $hour; ?>" hidden />
                            <div class="social-body no-padding-top">
                                <div class="media-body">
                                    <textarea class="form-control" id="txt_admin_prof_descript" placeholder="Write something here..."></textarea>
                                    <div class="padding-top-ten">
                                        <button type="button" id="btn_admin_prof_post" class="btn btn-primary pull-right btn-sm">Post</button>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div id="post_admin_prepend"></div>

                    <?php
                        if ( !empty($get_all_admin_posted) ) {
                            foreach ( $get_all_admin_posted as $gaap ) :
                    ?>
                                <div class="social-feed-box">
                                    <div class="social-avatar">
                                        <a href="<?php echo base_url();?>admin/profile/username/<?php echo $gaap->USERNAME; ?>" class="pull-left">
                                            <img alt="image" src="<?php echo base_url(); ?>public/img/prof/<?php echo $gaap->IMAGEURL; ?>">
                                        </a>
                                        <div class="media-body">
                                            <a href="<?php echo base_url();?>admin/profile/username/<?php echo $gaap->USERNAME; ?>">
                                                <?php echo $gaap->NAME; ?>
                                            </a>
                                            <small class="text-muted"><?php echo $gaap->DATE; ?> - <?php echo $gaap->HOUR; ?></small>
                                        </div>
                                    </div>
                                    <div class="social-body">
                                        <p>
                                            <?php echo $gaap->DESCRIPTION; ?>
                                        </p>
                                    </div>
                                </div>
                    <?php
                            endforeach;
                        }
                    ?>