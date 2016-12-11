        <div class="animated fadeInRight">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-box center-version" style="">
                        <a class="text-center" style="color: #a7b1c2;background-color: #2F4050;"  data-toggle="modal" data-target="#addnewContactModal">
                            <strong>ADD NEW CONTACT</strong>
                        </a>
                    </div>
                </div>

                <div id="contactNewlyContact"></div>

            	<?php
                    if ( !empty($get_all_contacts) ) {
                        foreach ( $get_all_contacts as $gac ) :
                ?>
                    <div class="col-md-4">
                        <div class="contact-box center-version">

                            <a data-toggle="modal" data-target="#modalUpdate<?php echo $gac->NO; ?>">
                                <img alt="image" class="img-circle" src="<?php echo base_url(); ?>public/img/prof/<?php echo $gac->IMAGEURL; ?>">
                                <h3 class="m-b-xs"><strong><?php echo $gac->FIRSTNAME ." ". $gac->LASTNAME; ?></strong></h3>

                                <div class="font-bold"><?php echo $gac->POSITION; ?></div>
                                <address class="m-t-md">
                                    <strong><?php echo $gac->COMPANY; ?></strong><br>
                                    <span class="glyphicon glyphicon-map-marker"></span> <?php echo $gac->ADDRESS; ?><br>
                                    <span class="glyphicon glyphicon-phone-alt"></span> <?php echo $gac->PHONE_NUM; ?>
                                </address>

                            </a>
                            <div class="contact-box-footer">
                                <a data-toggle="modal" data-target="#modalDelete<?php echo $gac->NO; ?>" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                                <a href="#" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-envelope"></i> Message</a>
                            </div>
                        </div>
                    </div>
                <?php
                	endforeach;
                	}
                ?>
            </div>
        </div>

<div class="modal inmodal fade" id="addnewContactModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <h4 class="modal-title">Contact</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <form>
                        <small>Image</small>
                        <input type="file" id="file_img" class="file hide" required />
                        <div class="input-group col-md-12">
                            <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                            <span class="input-group-btn">
                                    <button class="browse btn btn-info input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                            </span>
                        </div>
                    </form>
                </div>   
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <small>First name</small>
                                <input type="text" class="form-control" id="txt_contact_fname" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <small>Last name</small>
                                <input type="text" class="form-control" id="txt_contact_lname" />
                            </div>
                        </div>
                </div>   
                <div class="form-group">
                    <small>Position</small>
                    <input type="text" class="form-control" id="txt_contact_pos" />
                </div>    
                <div class="form-group">
                    <small>Company Name</small>
                    <input type="text" class="form-control" id="txt_contact_comp" />
                </div>    
                <div class="form-group">
                    <small>Address</small>
                    <input type="text" class="form-control" id="txt_contact_add" />
                </div>    
                <div class="form-group">
                    <small>Phone Number</small>
                    <input type="text" class="form-control" id="txt_contact_pnum" />
                </div>     
                <div class="form-group">
                    <input type="button" class="btn btn-primary full-width" id="btn_contact_addnew" value="Add new contact"/>
                </div>                 
            </div>
        </div>
    </div>
</div>

<?php
    if ( !empty($get_all_contacts) ) {
        foreach ( $get_all_contacts as $gac ) :
?>
    <div class="modal inmodal fade" id="modalUpdate<?php echo $gac->NO; ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <h4 class="modal-title">Contact</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo base_url();?>admin/contacts/updateInformation" enctype="multipart/form-data">
                        <div class="form-group">
                            <small>Image</small>
                            <input type="file" name="image" class="file hide" />
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control input-lg" disabled placeholder="Upload Image" value="<?php echo $gac->IMAGEURL; ?>">
                                <span class="input-group-btn">
                                            <button class="browse btn btn-info input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                </span>
                            </div>
                        </div> 
                        <input type="text" class="form-control" name="txt_contact_no" value="<?php echo $gac->NO; ?>" style="display: none;" />
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <small>First name</small>
                                        <input type="text" class="form-control" name="txt_contact_fname" value="<?php echo $gac->FIRSTNAME; ?>" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <small>Last name</small>
                                        <input type="text" class="form-control" name="txt_contact_lname" value="<?php echo $gac->LASTNAME; ?>" required />
                                    </div>
                                </div>
                        </div>   
                        <div class="form-group">
                            <small>Position</small>
                            <input type="text" class="form-control" name="txt_contact_pos" value="<?php echo $gac->POSITION; ?>" required />
                        </div>    
                        <div class="form-group">
                            <small>Company Name</small>
                            <input type="text" class="form-control" name="txt_contact_comp" value="<?php echo $gac->COMPANY; ?>" required />
                        </div>    
                        <div class="form-group">
                            <small>Address</small>
                            <input type="text" class="form-control" name="txt_contact_add" value="<?php echo $gac->ADDRESS; ?>" required />
                        </div>    
                        <div class="form-group">
                            <small>Phone Number</small>
                            <input type="text" class="form-control" name="txt_contact_pnum" value="<?php echo $gac->PHONE_NUM; ?>" required />
                        </div>     

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-info full-width" name="submit" value="UPDATE"/>
                                </div>     
                            </div>
                        </div>            
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
        endforeach;
    }
?>

<?php
    if ( !empty($get_all_contacts) ) {
        foreach ( $get_all_contacts as $gac ) :
?>
    <div class="modal inmodal fade" id="modalDelete<?php echo $gac->NO; ?>" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <h4 class="modal-title">Contact</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <h1 class="text-center no-margin-top" style="color: red">
                            You want to delete <?php echo $gac->FIRSTNAME. " " . $gac->LASTNAME;?>
                        </h1>
                    </div>
                    <form method="POST" action="<?php echo base_url();?>admin/contacts/updateContacts">
                        <input type="text" class="form-control" name="txt_contact_no" value="<?php echo $gac->NO; ?>" style="display: none;" />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="button" class="btn btn-default full-width"  data-dismiss="modal" value="No, cancel!"/>
                                </div>     
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-danger full-width" value="Yes, delete it!"/>
                                </div>     
                            </div>
                        </div> 
                    </form>           
                </div>
            </div>
        </div>
    </div>
<?php
        endforeach;
    }
?>