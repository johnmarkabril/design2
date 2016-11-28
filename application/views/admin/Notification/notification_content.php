<?php
    if ( ! empty($get_notification) ) {
        foreach ( $get_notification as $gn ) :
?>
            <div class="row">
                <div class="col-md-12 padding-bottom">
                    <div class="ibox loat-e-margins no-margins">
                        <div class="ibox-content padding-top">
                            <div class="row">
                            	<div class="col-md-1">
                            		<img style="width:50px;height:50px;" class="img-responsive" src="<?php echo base_url(); ?>public/img/prof/<?php echo $gn->IMAGEURL; ?>" />
                            	</div>
                            	<div class="col-md-7">
                            		<h4><?php echo $gn->NAME; ?></h4>
                            		<div class="col-md-12">
                            			<p><?php echo $gn->CONTENT; ?></p>
                            		</div>
                            	</div>
                            	<div class="col-md-4 pull-right">
                            		<h5 class="pull-right">
                                        <span><?php echo $gn->DATE." ".$gn->HOUR." "; ?> </span><span><a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </h5>
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php 
        endforeach;
    } else {
?>
        <h2>
            <center>No Notification!</center>
        </h2>
<?php
    }
?>