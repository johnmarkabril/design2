
    <div class="col-md-12 padding-bottom">
        <div class="ibox float-e-margins no-margins">
            <div class="ibox-content full-height" id="customer_purchase">
                <div class="input-group full-width">
                    <input type="text" placeholder="Search" class="input-sm form-control search">
                </div>
                <br/>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name </th>
                            <th>Email </th>
                            <th>Username </th>
                            <th>RegTime </th>
                        </tr>
                        </thead>
                        <tbody class="list">
                            <?php
                                if ( !empty($get_all_user) ) {
                                    foreach ( $get_all_user as $gau ) :
                            ?>
                                        <tr>
                                            <td class="l_name"><?php echo $gau->NAME; ?></td>
                                            <td><?php echo $gau->EMAIL; ?></td>
                                            <td><?php echo $gau->USERNAME; ?></td>
                                            <td class="l_date"><?php echo $gau->REG_TIME; ?></td>
                                        </tr>
                            <?php 
                                    endforeach;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
       	</div>
    </div>
