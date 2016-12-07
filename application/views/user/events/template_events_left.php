
        <?php
            if ( !empty($get_all_events) ) {
                foreach ( $get_all_events as $gae ) :
        ?>
                    <div class="" style="background-color: #ffffff; padding: 20px;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-left title-events">
                                    <?php echo $gae->TITLE; ?>
                                    <span class="pull-right" style="font-size: 10px;"><?php echo $gae->DATE; ?></span>
                                </div>
                                <div>
                                    <?php echo $gae->DESCRIPTION; ?>
                                </div>
                            </div>
                        </div>
                    </div>
        <?php 
                endforeach;
            } else {
        ?>
                <h1 class="text-center">No event!</h1>
        <?php
            }
        ?>