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
                } else if ( $curpage == 'Compose Message' ) {
                    $dashinbox  = "active";
                } else if ( $curpage == 'Notification' ) {
                    $dashnotif  = "active";
                } else if ( $curpage == 'Reports' ) {
                    $dashreport = "active";
                } else if ( $curpage == 'About My Site' ) {
                    $dashsetting = "active";
                } else if ( $curpage == 'Events' ) {
                    $dashsetting = "active";
                } else if ( $curpage == 'Paypal Configuration' ) {
                    $dashsetting = "active";
                } else if ( $curpage == 'Product Grid' ) {
                    $dashproduct = "active";
                } else if ( $curpage == 'Product Category' ) {
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
                            <a href="<?php echo base_url();?>admin"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                        </li>

            <?php   } ?>

            <?php   if ($permission == "Messages") { ?>

                        <li class="<?php echo $dashinbox; ?>">
                            <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Messages </span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <?php foreach($permission_cntnt as $persub) : ?>

                                    <?php if ($persub == "Compose Message") { ?>
                                            <li><a href="<?php echo base_url();?>admin/compose_message">Compose Message</a></li>
                                    <?php } ?>

                                    <?php if ($persub == "Inbox") { ?>
                                            <li><a href="<?php echo base_url();?>admin/inbox">Inbox</a></li>
                                    <?php } ?>

                                <?php endforeach; ?>
                            </ul>
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
                                <?php foreach($permission_cntnt as $persub) : ?>

                                    <?php if ($persub == "Reports") { ?>
                                        <li><a href="<?php echo base_url();?>admin/reports">Reports</a></li>
                                    <?php } ?>

                                <?php endforeach; ?>
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

                                    <?php if ($persub == "Events") { ?>
                                        <li><a href="<?php echo base_url();?>admin/events">Events</a></li>
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
                                <?php foreach($permission_cntnt as $persub) : ?>

                                    <?php if ($persub == "Product Category") { ?>
                                        <li><a href="<?php echo base_url();?>admin/product_category">Product Category</a></li>
                                    <?php } ?>

                                    <?php if ($persub == "Product Grid") { ?>
                                        <li><a href="<?php echo base_url();?>admin/product_grid">Product Grid</a></li>
                                    <?php } ?>

                                    <?php if ($persub == "Product Sales") { ?>
                                        <li><a href="<?php echo base_url();?>admin/product_sales">Product Sales</a></li>
                                    <?php } ?>
                                    
                                <?php endforeach; ?>
                            </ul>
                        </li>

            <?php   } ?>

            <?php   if ($permission == "User_Management") { ?>

                        <li class="<?php echo $dashuser; ?>">
                            <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">User Management </span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <?php foreach($permission_cntnt as $persub) : ?>

                                    <?php if ($persub == "Accounts") { ?>
                                        <li><a href="<?php echo base_url();?>admin/accounts">Accounts</a></li>
                                    <?php } ?>

                                    <?php if ($persub == "Co-Administrator") { ?>
                                        <li><a href="<?php echo base_url();?>admin/co_administrator">Co-Administrator</a></li>
                                    <?php } ?>
                                    
                                <?php endforeach; ?>
                            </ul>
                        </li>

            <?php   } ?>
            
            <?php
                endforeach;
            ?>   
        </ul>
    </div>
</nav>