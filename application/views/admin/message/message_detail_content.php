<?php 
    foreach ( $get_spec_mess as $gsm ) :
?>
    <div class="mail-box-header">
        <h3 style="padding-bottom: 4px;">
            <span class="font-noraml">Subject: </span><?php echo $gsm->SUBJECT;?>
            <span class="pull-right font-noraml">From: <?php echo $gsm->EMAILFROM;?></span>
        </h3>
        <h5>
            <span class="pull-right font-noraml"><?php echo $gsm->DATE;?> <?php echo $gsm->TIME;?></span>
        </h5>
    </div>
    <div class="mail-box">
        <div class="mail-body full-height">
            <?php
                $bcontdel = explode('\n', $gsm->BODYCONTENT);
                foreach ($bcontdel as $bcon) :
            ?>
                    <p>
                        <?php echo $bcon; ?>
                    </p>
            <?php
                endforeach;
            ?>
        </div>
        <div class="mail-body text-right tooltip-demo">
            <a class="btn btn-sm btn-white" href="mail_compose.html"><i class="fa fa-reply"></i> Reply</a>
            <button title="" data-placement="top" data-toggle="tooltip" type="button" data-original-title="Print" class="btn btn-sm btn-white"><i class="fa fa-print"></i> Print</button>
        </div>
        <div class="clearfix"></div>
    </div>
<?php
    endforeach;
?>