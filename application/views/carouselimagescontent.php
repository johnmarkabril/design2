<div class="row text-center">
    <div class="col-md-12">
        <div id="carousel-example-generic" class="carousel slide" data-interval="8000" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <?php 
                    $i = 1;
                    foreach ($popular_content as $popcont) {
                        $item_class = ($i == 1) ? 'item active' : 'item';
                ?>
                        <div class="<?php echo $item_class; ?>">
                            <img src="<?php echo base_url(); ?>public/img/<?php echo $popcont->IMAGEURL;?>" class="img-responsive full-width" style="height: 75%;">
                            <div class="carousel-caption" style="color: #FFFFFF;">
                                <h1 class="font-bold"><?php echo $popcont->TITLE; ?></h1>
                                <h2>Buy recipe now for ₱ <?php echo $popcont->PRICE; ?></h2>
                                <h3>To experience something your tongue haven't taste yet</h3>
                            </div>
                        </div>
                <?php
                    $i++;
                    }
                ?>

            </div>
        </div>
    </div>
</div>

<hr/>
