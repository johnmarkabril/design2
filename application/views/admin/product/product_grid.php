<?php if (!empty($get_prod_sell)) { ?>
    <center>
        <input type="text" class="form-control half-width search" placeholder="Search Product" id="txt_search_prod_grid">
    </center>
    <div class="animated fadeInRight padding-top" id="productGridSearchList">
        <div class="row">
            <div class="list">
            <?php foreach( $get_prod_sell as $gps ) : ?>
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">
                            <div>
                                <img class="img-responsive " src="<?php echo base_url(); ?>public/img/<?php echo $gps->IMAGEURL;?>"/>
                            </div>
                            <div class="product-desc" style="height: 130px;">
                                <span class="product-price">
                                    <div class="prodtitle">
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
                                    <a href="#" class="product-name"> <?php echo $gps->TITLE; ?></a>
                                </left>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php } ?>
