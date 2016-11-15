        <div class="animated fadeInRight ecommerce">

        <div class="padding-bottom">
            <div class="ibox-content padding-top border-bottom no-margin-bottom">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" id="category_title" name="category" value="" placeholder="Category" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <select name="status" id="category_status" class="form-control">
                                <option value="Enabled" selected>Enabled</option>
                                <option value="Disabled">Disabled</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1">
                    	<input type="button" id="btn_new_category_save" class="btn btn-success btn-sm pull-right" value="Save"/>
                    </div>
                </div>
            </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content full-height">

                			<div class="table-responsive full-height">
	                            <table class="table table-stripped">
	                                <thead>
	                                <tr>
	                                    <th>Category</th>
	                                    <th>Number of Product</th>
	                                    <th>Status</th>
	                                    <th class="text-right">Action</th>

	                                </tr>
	                                </thead>
	                                <tbody id="pend-title">
	                                
	                                	<?php 
	                                		if (!empty($get_content)) { 
	                                	?>
	                                	<?php
	                                			foreach ($get_content as $gc) :
	                                	?>
					                                <tr>
					                                    <td>
					                                        <?php echo $gc->CATNAME; ?>
					                                    </td>
					                                    <td>
					                                        320
					                                    </td>
					                                    <td>
					                                    	<?php if ($gc->STATUS == 'Enabled') { ?>
					                                        	<span class="label label-primary">Enabled</span>
					                                        <?php } else { ?>
					                                        	<span class="label label-danger">Disabled</span>
					                                        <?php } ?>
					                                    </td>
					                                    <td class="text-right">
					                                        <div class="btn-group">
					                                            <button class="btn-white btn btn-xs">Edit</button>
					                                        </div>
					                                    </td>
					                                </tr>
		                                <?php 
		                                		endforeach;
		                                	} 
		                                ?>
	                                		
	                                	<div id="new_added_cat"></div>
	                                </tbody>
	                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>