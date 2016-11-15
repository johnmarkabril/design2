    <div class="mail-box-header">

        <form method="get" action="index.html" class="pull-right mail-search">
            <div class="input-group">
                <input type="text" class="form-control input-sm" name="search" placeholder="Search email">
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-sm btn-primary">
                         Search
                    </button>
                </div>
            </div>
        </form>
        <h2>
            Inbox (<?php echo $get_num_rows_mess; ?>)
        </h2>
    </div>
    <div class="mail-box no-margin-bottom">
        <div class="mail-body full-height">
            <table class="table table-hover table-mail">
                <tbody>
                    <?php
                        if ( !empty($get_all_content) ) {
                            foreach ( $get_all_content as  $gac ) :
                                if ( $gac->UNREAD == 0 ) {
                    ?>  
                                    <tr class="unread">
                                        <td class="check-mail">
                                            <input type="checkbox" class="i-checks">
                                        </td>
                                        <td class="mail-ontact text-size-inbox"><a href="<?php echo base_url(); ?>admin/message/inbox/content"><?php echo $gac->NAMEFROM; ?></a></td>
                                        <td class="mail-subject text-size-inbox"><a href="<?php echo base_url(); ?>admin/message/inbox/content"><?php echo $gac->SUBJECT; ?></a></td>
                                        <td class="text-right mail-date">
                                            <h6>
                                                <?php echo $gac->TIME;?>
                                            </h6>
                                        </td>
                                    </tr>
                    <?php
                                } else {
                    ?>
                                    <tr class="read">
                                        <td class="check-mail">
                                            <input type="checkbox" class="i-checks">
                                        </td>
                                        <td class="mail-ontact text-size-inbox "><a>Facebook</a></td>
                                        <td class="mail-subject text-size-inbox "><a>Many desktop publishing packages and web page editors.</a></td>
                                        <td class="text-right mail-date text-size-inbox "><h6>05:15 AM</h6></td>
                                    </tr>
                    <?php
                                }
                            endforeach;
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="mail-body text-right tooltip-demo">
            <button class="btn btn-white btn-sm"><i class="fa fa-arrow-left"></i> Previous</button>
            <button title="" data-placement="top" data-toggle="tooltip" type="button" data-original-title="Print" class="btn btn-white btn-sm">Next <i class="fa fa-arrow-right"></i></button>
        </div>
        <div class="clearfix"></div>
    </div>