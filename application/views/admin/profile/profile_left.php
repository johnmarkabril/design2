                    <div class="social-feed-box margin-bottom">
                        <?php
                            foreach ( $get_specific_data as $gsd ) :
                        ?>
                            <div class="social-avatar">
                                <a href="" class="pull-left">
                                    <img alt="image" src="<?php echo base_url(); ?>public/img/prof/<?php echo $gsd->IMAGEURL;?>">
                                </a>
                            </div>
                            <div class="social-body no-padding-top">
                                <div class="media-body">
                                    <textarea class="form-control" placeholder="Write something here..."></textarea>
                                    <div class="padding-top-ten">
                                        <button type="button" class="btn btn-primary pull-right btn-sm">Post</button>
                                    </div>
                                </div>
                            </div>
                        <?php
                            endforeach;
                        ?>
                    </div>

                    <?php
                        if ( !empty($get_all_admin_posted) ) {
                            foreach ( $get_all_admin_posted as $gaap ) :
                    ?>
                                <div class="social-feed-box">
                                    <div class="social-avatar">
                                        <a href="" class="pull-left">
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
                        } else {
                    ?>
                            <div class="text-center">
                                <h1>NO POST!</h1>
                            </div>
                    <?php
                        }
                    ?>