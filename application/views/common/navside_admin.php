<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> 
                    <span>
                        <center>
                        <img alt="image" class="img-circle img-responsive half-width" src="<?php echo base_url(); ?>public/img/prof3.jpg"/></center>
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear text-center"> 
                            <span class="block m-t-xs">
                                <strong class="font-bold">John Mark Abril</strong>
                            </span>
                            <span class="text-muted text-xs block">Web Developer <b class="caret"></b></span> 
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="<?php echo base_url();?>admin/profile">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="<?php echo base_url();?>admin/message/local_inbox">Local Inbox</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    JMAE
                </div>
            </li>

            <?php

                $dashactive     = '';
                $dashnotif      = '';
                $dashproduct    = '';
                $dashuser       = '';
                $dashinbox      = '';
                $dashreport     = '';
                $dashsetting    = '';

                if ( $curpage == 'Dashboard' ) {
                    $dashactive = "active";
                } else if ( $curpage == 'Inbox' ) {
                    $dashinbox  = "active";
                } else if ( $curpage == 'Notification' ) {
                    $dashnotif  = "active";
                } else if ( $curpage == 'Compose Message' ) {
                    $dashinbox  = "active";
                } else if ( $curpage == 'Local Inbox' ) {
                    $dashinbox  = "active";
                } else if ( $curpage == 'ComposeMail' ) {
                    $dashinbox  = "active";
                } else if ( $curpage == 'Reports' ) {
                    $dashreport = "active";
                } else if ( $curpage == 'About My Site' ) {
                    $dashsetting = "active";
                } else if ( $curpage == 'Advertisements' ) {
                    $dashsetting = "active";
                } else if ( $curpage == 'Paypal Configuration' ) {
                    $dashsetting = "active";
                } else if ( $curpage == 'Product List' ) {
                    $dashproduct = "active";
                } else if ( $curpage == 'Product Category' ) {
                    $dashproduct = "active";
                } else if ( $curpage == 'Product Report' ) {
                    $dashproduct = "active";
                } else if ( $curpage == 'Product Sales' ) {
                    $dashproduct = "active";
                } else if ( $curpage == 'Accounts' ) {
                    $dashuser = "active";
                } else if ( $curpage == 'Co-Administrator' ) {
                    $dashuser = "active";
                }
            ?>

            <?php 
                foreach ($permission_cntnt as $permission) :
            ?>

            <?php   if ($permission == "Dashboard") { ?>

                        <li class="<?php echo $dashactive; ?>">
                            <a href="<?php echo base_url();?>admin/dashboard"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                        </li>

            <?php   } ?>

            <?php   if ($permission == "Messages") { ?>

                        <li class="<?php echo $dashinbox; ?>">
                            <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Messages </span><span class="fa arrow"></span></a>
                            <?php foreach($permission_cntnt as $persub) : ?>

                                <?php if ($persub == "Mail Inbox") { ?>
                                    <ul class="nav nav-second-level collapse">
                                        <li><a href="<?php echo base_url();?>admin/message/inbox">Mail Inbox</a></li>
                                        <li></li>
                                    </ul>
                                <?php } ?>

                                <?php if ($persub == "Local Inbox") { ?>
                                    <ul class="nav nav-second-level collapse">
                                        <li><a href="<?php echo base_url();?>admin/message/composemail">Compose Mail</a></li>
                                        <li></li>
                                    </ul>
                                <?php } ?>

                                <?php if ($persub == "Compose Message") { ?>
                                    <ul class="nav nav-second-level collapse">
                                        <li><a href="<?php echo base_url();?>admin/message/local_inbox">Local Inbox</a></li>
                                        <li></li>
                                    </ul>
                                <?php } ?>

                                <?php if ($persub == "Compose Mail") { ?>
                                    <ul class="nav nav-second-level collapse">
                                        <li><a href="<?php echo base_url();?>admin/message/compose_message">Compose Message</a></li>
                                        <li></li>
                                    </ul>

                                <?php } ?>

                            <?php endforeach; ?>
                        </li>

            <?php   } ?>

            <?php   if ($permission == "Notification") { ?>
            
                        <li class="<?php echo $dashnotif; ?>">
                            <a href="<?php echo base_url();?>admin/notification"><i class="fa fa-bell"></i> <span class="nav-label">Notification</span></a>
                        </li>

            <?php   } ?>

            <?php   if ($permission == "Statistics") { ?>
            
                        <li class="<?php echo $dashreport; ?>">
                            <a href="#"><i class="fa fa-area-chart"></i> <span class="nav-label">Statistics</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="<?php echo base_url();?>admin/reports">Reports</a></li>
                            </ul>
                        </li>

            <?php   } ?>

            <?php   if ($permission == "Settings") { ?>
            
                        <li class="<?php echo $dashsetting; ?>">
                            <a href="#"><i class="fa fa-cog"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level collapse">
                                <?php foreach($permission_cntnt as $persub) : ?>

                                    <?php if ($persub == "About My Site") { ?>
                                        <li><a href="<?php echo base_url();?>admin/about_my_site">About My Site</a></li>
                                    <?php } ?>

                                    <?php if ($persub == "Advertisements") { ?>
                                        <li><a href="<?php echo base_url();?>admin/advertisements">Advertisements</a></li>
                                    <?php } ?>

                                    <?php if ($persub == "PayPal Configuration") { ?>
                                        <li><a href="<?php echo base_url();?>admin/paypal_configuration">PayPal Configuration</a></li>
                                    <?php } ?>
                                    
                                <?php endforeach; ?>
                            </ul>

                        </li>

            <?php   } ?>

            <?php   if ($permission == "Product_Management") { ?>

                        <li class="<?php echo $dashproduct; ?>">
                            <a href="#"><i class="fa fa-product-hunt"></i> <span class="nav-label">Product Management </span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="<?php echo base_url();?>admin/product/product_category">Product Category</a></li>
                                <li><a href="<?php echo base_url();?>admin/product/product_list">Product List</a></li>
                                <li><a href="<?php echo base_url();?>admin/product/product_report">Product Report</a></li>
                                <li><a href="<?php echo base_url();?>admin/product/product_sales">Product Sales</a></li>
                            </ul>
                        </li>

            <?php   } ?>

            <?php   if ($permission == "User_Management") { ?>

                        <li class="<?php echo $dashuser; ?>">
                            <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">User Management </span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="<?php echo base_url();?>admin/accounts">Accounts</a></li>
                            </ul>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="<?php echo base_url();?>admin/co_administrator">Co-Administrator</a></li>
                            </ul>
                        </li>

            <?php   } ?>
            
            <?php
                endforeach;
            ?>   
        </ul>
    </div>
</nav>