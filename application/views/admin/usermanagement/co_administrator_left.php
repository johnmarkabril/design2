<div class="ibox loat-e-margins no-margins">
    <div class="ibox-title">
        <h5>Administrators account List</h5>
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
	                                <th>Administrator List</th>
	                            </tr>
	                        </thead>
	                        <?php 
	                        	if ( !empty($get_all_admin) ) {
	                        ?>
			                    <tbody class="list">
	                        		<?php foreach($get_all_admin as $gaa) :?>
			                            <tr>
			                                <td class="title">
			                                	<a href="#"><?php echo $gaa->NAME;?></a>
			                                	<span class="pull-right"><a href="" class="fa fa-trash" aria-hidden="true"></a></span>
			                                </td>
			                            </tr>
			                       	<?php endforeach; ?>
			                    </tbody>
	                        <?php 
	                    		} else {
	                    			echo "No Results!";
	                        	} 
	                        ?>
	                    </table>
                    </div>
           		</div>
           	</div>
       	</div>
    </div>
</div>