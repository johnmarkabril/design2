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
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="contacts.html">Contacts</a></li>
                                    <li><a href="mailbox.html">Mailbox</a></li>
                                    <li class="divider"></li>
                                    <li><a href="login.html">Logout</a></li>
                                </ul>
                            </div>
                            <div class="logo-element">
                                JMAE
                            </div>
                        </li>

                        <?php

                            $dashactive = '';
                            $dashnotif = '';
                            $dashproduct = '';
                            $dashuser = '';
                            $dashinbox = '';

                            if ( $curpage == 'Dashboard' ) {
                                $dashactive = "active";
                            } else if ( $curpage == 'Product' ) {
                                $dashproduct = "active";
                            } else if ( $curpage == 'User' ) {
                                $dashuser = "active";
                            } else if ( $curpage == 'Inbox' ) {
                                $dashinbox  = "active";
                            }
                        ?>

                        <li class="<?php echo $dashactive; ?>">
                            <a href="<?php echo base_url();?>admin/dashboard"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                        </li>

                        <li class="<?php echo $dashinbox; ?>">
                            <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Messages </span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="<?php echo base_url();?>admin/message/inbox">Inbox</a></li>
                                <li></li>
                            </ul>
                        </li>

                        <li class="<?php echo $dashnotif; ?>">
                            <a href="<?php echo base_url();?>admin/notification"><i class="fa fa-bell"></i> <span class="nav-label">Notification</span></a>
                        </li>

                        <li class="<?php echo $dashproduct; ?>">
                            <a href="#"><i class="fa fa-product-hunt"></i> <span class="nav-label">Product Management </span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="<?php echo base_url();?>admin/product">Product 1.1</a></li>
                            </ul>
                        </li>

                        <li class="<?php echo $dashuser; ?>">
                            <a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">User Management </span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="<?php echo base_url();?>admin/user">User 1.1</a></li>
                            </ul>
                        </li>
                        
                    </ul>

                </div>
            </nav>