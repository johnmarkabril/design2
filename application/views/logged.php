<?php $user_data_logsess = $this->session->userdata['log_sess']; ?>
<center>
    <img  class="img-responsive" src="<?php echo base_url(); ?>public/img/prof/<?php echo $user_data_logsess->IMAGEURL; ?>" style="width: 120px;">
    <div class="pad-top-ten"><?php print_r($user_data_logsess->NAME); ?></div>
    <div class="pad-top-ten"><?php print_r($user_data_logsess->EMAIL); ?></div>
</center>
<div class="panel-heading no-border mar-top-ten cursor-pointer" style="background-color: #9DE0D0;">
    <a href="<?php echo base_url(); ?>profile/account/<?php echo $user_data_logsess->USERNAME;?>">
        <div class="font-seventen color-white text-center">PROFILE</div>
    </a>
</div>
<div class="panel-heading no-border mar-top-ten cursor-pointer" style="background-color: #9DE0D0;">
    <div class="font-seventen color-white text-center">SETTINGS</div>
</div>
<div class="panel-heading no-border mar-top-ten cursor-pointer" style="background-color: #FF426F;">
    <a href="<?php echo base_url();?>logout">
        <div class="font-seventen color-white text-center">LOGOUT</div>
    </a>
</div>