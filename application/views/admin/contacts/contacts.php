        <div class="animated fadeInRight">
        <div class="row">
    	<?php
            if ( !empty($get_all_contacts) ) {
                foreach ( $get_all_contacts as $gac ) :
        ?>
            <div class="col-lg-3">
                <div class="contact-box center-version">

                    <a href="profile.html">

                        <img alt="image" class="img-circle" src="<?php echo base_url(); ?>public/img/prof/<?php echo $gac->IMAGE_URL; ?>">
                        <h3 class="m-b-xs"><strong><?php echo $gac->FIRSTNAME ." ". $gac->LASTNAME; ?></strong></h3>

                        <div class="font-bold"><?php echo $gac->POSITION; ?></div>
                        <address class="m-t-md">
                            <strong><?php echo $gac->COMPANY; ?></strong><br>
                            <span class="glyphicon glyphicon-map-marker"></span> <?php echo $gac->ADDRESS; ?><br>
                            <span class="glyphicon glyphicon-phone-alt"></span> <?php echo $gac->PHONE_NUM; ?>
                        </address>

                    </a>
                    <div class="contact-box-footer">
                        <a href="#" class="btn btn-xs btn-white"><i class="glyphicon glyphicon-envelope"></i> Message</a>
                    </div>
                </div>
            </div>
        <?php
        	endforeach;
        	}
        ?>
        </div>
        </div>