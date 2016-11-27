
        <?php
            if ( !empty($get_all_events) ) {
                foreach ( $get_all_events as $gae ) :
        ?>
        <div class="jumbotron product-box animated fadeInRight" style="background-color: #ffffff; padding: 20px;">
            <div class="row">
                <div class="col-md-12">
                <div class="text-left title-events"><?php echo $gae->TITLE; ?></div>
                  <div>
                    <?php echo $gae->DESCRIPTION; ?>
                  </div>
                </div>
            </div>
        </div>
        <?php 
                endforeach;
            }
        ?>