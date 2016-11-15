<div>
    <h1>Recipes</h1>
</div>
<hr>
    <h5> <a href="<?php echo base_url();?>">HOME</a> / <span style="color: #FF65AE;">RECIPES</span> </span></a></h5>
<hr>

<div class="col-md-12">
    <div class="col-md-12 pad-bot">
    <div class="pull-right dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $selectname;?>
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>recipes/option/alphabetical">Alphabetically</a></li>
            <li><a href="<?php echo base_url();?>recipes/option/ascending">Low price to Highest price</a></li>
            <li><a href="<?php echo base_url();?>recipes/option/descending">Highest price to Low price</a></li>
        </ul>
    </div>
    </div>
</div>

<div class="col-md-12">
<?php
    foreach ($recipes_content as $recipe) {
?>
        <div class="col-md-4">
            <div class="ibox">
                <div class="ibox-content product-box">

                    <div class="product-imitation no-pad">
                        <img src="<?php echo base_url(); ?>public/img/<?php echo $recipe->IMAGEURL;?>" class="img-responsive" />
                    </div>
                    <div class="product-desc"  style="height: 130px;">
                        <span class="product-price">
                            ₱ <?php echo $recipe->PRICE;?>
                        </span>
                        <left  style="position: absolute; bottom: 0%;">
                            <small class="text-muted"><?php echo $recipe->CATEGORIES; ?></small>
                            <a class="product-name" href="<?php echo base_url(); ?>recipes/sell/<?php echo $recipe->NO; ?>"> <?php echo $recipe->TITLE;?></a>
                            <div class="m-t text-righ text-center">
                                <form method="POST">
                                    <?php if(!$this->session->userdata('log_sess')){ ?>
                                        <input type="text" name="txtno" value="<?php echo $recipe->NO; ?>" hidden disabled/>
                                        <a  data-toggle="modal" data-target="#loginModal" class="btn btn-xs btn-outline btn-primary">Buy Now <i class="fa fa-long-arrow-right"></i></a>
                                    <?php } else { ?>
                                        <input type="text" name="txtno" value="<?php echo $recipe->NO; ?>" hidden/>
                                        <!-- <button type="submit" class="btn btn-xs btn-outline btn-primary">Buy Now <i class="fa fa-long-arrow-right"></i></button> -->
                                        <a class="btn btn-xs btn-outline btn-primary" href="<?php echo base_url(); ?>recipes/sell/<?php echo $recipe->NO; ?>">View Detail</a>
                                    <?php } ?>
                                </form>
                            </div>
                        </left>
                        
                    </div>
                </div>
            </div>
        </div>

            
<?php
    }
?>
</div>