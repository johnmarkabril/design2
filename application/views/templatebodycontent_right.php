<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default no-border no-mar-bot" >
        <div class="panel-heading no-border"  style="background-color: #9DE0D0;">
            <div class="font-seventen color-white text-center">
                <span class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    CATEGORIES
                </span>
            </div>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body no-pad-bot">
                <div class="row">
                    <?php foreach ($categories_content as $catcon) { ?>
                        <div class="green-hover pad-left-twentyfive"><a href="<?php echo base_url(); ?>categories/name/<?php echo $catcon->CATNAME; ?>" class=""><?php echo $catcon->CATNAME; ?></a></div>
                        <hr/>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="panel panel-default no-border">
    <div class="panel-heading no-border" style="background-color: #FF426F;">
        <div class="font-seventen color-white text-center">NEW CUPCAKES</div>
    </div>
    <div class="panel-body no-pad">
        <div class="row">
            <?php 
                foreach ($popular_content as $popcont) {
                ?>
                <div class="col-md-12 pad-top">
                    <div class="col-md-4">
                        <a class="cursor-pointer"><img src="<?php echo base_url();?>public/img/<?php echo $popcont->IMAGEURL;?>" class="img-responsive"></a>
                    </div>
                    <div class="col-md-8 font-twelve text-center">
                        <div><?php echo $popcont->DATE; ?></div>
                        <div><?php echo substr($popcont->DESCRIPTION, 0, 100). "..." ?></div>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>

<div class="panel panel-default no-border">
    <div class="panel-heading no-border" style="background-color: #919191;">
        <div class="font-seventen color-white text-center">ABOUT OUR BLOG</div>
    </div>
    <div class="panel-body">
        <div class="row text-center">
            <div class="col-md-12 pad-ten">
                LOREM IPSUM DOLOR SIT AMET, CONSEC TEER ADIPISCING. PRSENT VES TIBULUM.
            </div>
            <div class="col-md-12 pad-ten">
                <img class="img-responsive" src="<?php echo base_url();?>public/img/page1-img1.jpg"/>
            </div>
            <div class=" pad-ten justify-text">
                Lorem ipsum dolor sit amet, consec tetuer adipi scing. Praesent vestibu lum molestie lacuiirhs. Aenean non ummy hendreriauris. Phasellllus.

                Lorem ipsum dolor sit amet, consec tetuer adipi scing. Praesent vestibu lum molestie lacuiirhs. Aenean non ummy hendreriauris. Phasellllus. porta. Fusce suscipit varius mium sociis totdnati bus et magis dis parturient montes, nascetur.
            </div>
        </div>
    </div>
</div>