        <div class="ibox">
            <div class="ibox-title">
                PayPal Configuration Account List
                
            </div>
            <div class="ibox-content full-height">
                <input type="text" class="form-control" placeholder="Search an Email address"/>
                <table class="table table-hover table-mail">
                    <thead>
                        <tr>
                            <th>Email Address</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php
                            if ( empty($get_paypal_account) ) {
                                echo "NO ACCOUNT YET!";
                            } else {
                                foreach ( $get_paypal_account as $gpa ) :
                                    if ( $gpa->STATUS == "enabled") {
                        ?>
                                        <tr>
                                            <td class="mail-subject text-size-inbox "><a href="<?php echo base_url(); ?>admin/paypal_configuration/update_account/<?php echo $gpa->NO;?>"><?php echo $gpa->PAYPAL_EMAIL; ?></a></td>
                                            <td><span class="label label-primary">Enabled</span></td>
                                        </tr>
                        <?php       } else { ?>
                                        <tr>
                                            <td class="mail-subject text-size-inbox "><a href="<?php echo base_url(); ?>admin/paypal_configuration/update_account/<?php echo $gpa->NO;?>"><?php echo $gpa->PAYPAL_EMAIL; ?></a></td>
                                            <td><span class="label label-danger">Disabled</span></td>
                                        </tr>
                        <?php
                                    }
                                endforeach;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php $this->load->view('admin/settings/paypal_modal'); ?>