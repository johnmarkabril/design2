<?php if (!empty($get_prod_sell)) { ?>
    <div id="productgrid_search">
        <center>
            <input type="text" class="form-control half-width search" placeholder="Search Product">
        </center>
        <div class="animated fadeInRight padding-top">
            <div class="row">
                <div class="list">
                <?php foreach( $get_prod_sell as $gps ) : ?>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">
                                <div>
                                    <a  data-toggle="modal" data-target="#productGridModal<?php echo $gps->NO;?>">
                                        <img class="img-responsive " src="<?php echo base_url(); ?>public/img/<?php echo $gps->IMAGEURL;?>"/>
                                    </a>
                                </div>
                                <div class="product-desc" style="height: 130px;">
                                    <span class="product-price">
                                        <div>
                                            <?php 
                                                if($gps->PRICE != "") { 
                                                    echo "₱ ".$gps->PRICE;
                                                } else {
                                                    echo "FREE";
                                                }
                                            ?>
                                        </div>
                                    </span>
                                    <left  style="position: absolute; bottom: 0%;">
                                        <small class="text-muted" ><?php echo $gps->CATEGORIES; ?></small>
                                        <a href="#" class="product-name title"> <?php echo $gps->TITLE; ?></a>
                                    </left>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php foreach( $get_prod_sell as $gps ) : ?>
    <div class="modal inmodal" id="productGridModal<?php echo $gps->NO;?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo $gps->TITLE;?></h4>
                    <small class="font-bold">Price: 
                        <?php 
                            if($gps->PRICE != "") { 
                                echo "₱ ".$gps->PRICE;
                            } else {
                                echo "FREE";
                            }
                        ?>
                    </small>
                </div>
                <div class="modal-body">
                    <img class="img-responsive " src="<?php echo base_url(); ?>public/img/<?php echo $gps->IMAGEURL;?>"/>
                    <p></p>
                    <p>
                        <?php echo $gps->DESCRIPTION;?>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>