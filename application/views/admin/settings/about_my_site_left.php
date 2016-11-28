<div class="ibox loat-e-margins no-margins">
    <div class="ibox-title">
        <h5>About My Site List</h5>
    </div>
    <div class="ibox-content full-height" id="AboutMySiteList">
       	<div class="no-margins">
           	<div class="row">
           		<div class="col-md-12">
           			<h4><input type="text" class="form-control search" placeholder="Search"/></h4>
           			<div class="table-responsive">

	           			<table class="table table-striped text-center">
	                        <thead>
	                            <tr>
	                                <th>Title</th>
	                            </tr>
	                        </thead>
	                        <?php if(!empty($get_list)) {?>
			                    <tbody class="list">
	                        		<?php foreach($get_list as $gl) :?>
			                            <tr>
			                                <td class="title">
			                                	<a href="#"><?php echo $gl->TITLE;?></a>
			                                	<span class="pull-right"><a href="<?php echo base_url();?>admin/about_my_site/delete_about_my_site/<?php echo $gl->NO; ?>" class="fa fa-trash" aria-hidden="true"></a></span>
			                                </td>
			                            </tr>
			                       	<?php endforeach; ?>
			                    </tbody>
	                        <?php } ?>
	                    </table>
                    </div>
           		</div>
           	</div>
       	</div>
    </div>
</div>