<?php //$user_data_logsess = $this->session->userdata['log_sess'];
    foreach ($get_det as $gd) :
?>
    <center>
        <img  class="img-responsive" src="<?php echo base_url(); ?>public/img/prof/<?php echo $gd->IMAGEURL; ?>" style="width: 120px;">
        <div class="pad-top-ten"><?php print_r($gd->NAME); ?></div>
        <div class="pad-top-ten"><?php print_r($gd->EMAIL); ?></div>
    </center>
    <div class="panel-heading no-border mar-top-ten cursor-pointer" style="background-color: #9DE0D0;">
        <a href="<?php echo base_url(); ?>profile/account/<?php echo $gd->USERNAME;?>">
            <div class="font-seventen color-white text-center">PROFILE</div>
        </a>
    </div>
    <div class="panel-heading no-border mar-top-ten cursor-pointer" style="background-color: #9DE0D0;">
        <a href="<?php echo base_url();?>profile/settings/<?php echo $gd->USERNAME; ?>">
            <div class="font-seventen color-white text-center">SETTINGS</div>
        </a>
    </div>
    <div class="panel-heading no-border mar-top-ten cursor-pointer" style="background-color: #FF426F;">
        <a href="<?php echo base_url();?>logout">
            <div class="font-seventen color-white text-center">LOGOUT</div>
        </a>
    </div>
<?php
    endforeach;
?>