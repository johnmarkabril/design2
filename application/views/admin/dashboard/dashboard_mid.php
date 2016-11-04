<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Daily Feed </h5>
            </div>
            <div class="ibox-content" id="customer_purchase" style="height: 360px;">
                <div class="row">
                    <div class="col-sm-3 pull-right pad-bot-fiften">
                        <div class="input-group full-width">
                            <input type="text" placeholder="Search" class="input-sm form-control search">
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name </th>
                            <th>Order Name </th>
                            <th>Phone </th>
                            <th>Address </th>
                            <th>Category </th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        <?php foreach($get_content as $gc) : ?>
                        <tr>
                            <td class="l_name"><?php echo $gc->NAME;?></td>
                            <td class="l_prodname"><?php echo $gc->PRODUCT_NAME;?></td>
                            <td class="l_cellno"><?php echo $gc->PHONE;?></td>
                            <td class="l_address"><?php echo $gc->ADDRESS;?></td>
                            <td class="l_cat"><?php echo $gc->PRODUCT_CATEGORY;?></td>
                            <td class="l_date"><?php echo $gc->DATE;?></td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
       	</div>
    </div>
</div>