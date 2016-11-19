
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content full-height">

                            <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                                <thead>
                                <tr>

                                    <th data-toggle="true">Product Name</th>
                                    <th data-hide="all">Description</th>
                                    <th data-hide="all">Category</th>
                                    <th data-hide="phone">Price</th>
                                    <th data-hide="phone">Status</th>
                                    <th class="text-right" data-sort-ignore="true">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if ( empty($get_prod_sells) ) {
                                            echo "<div class='text-center'>No product sales!</div>";
                                        }else{
                                            foreach ($get_prod_sells as $gps) :
                                    ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $gps->TITLE; ?>
                                                    </td>
                                                    <td>
                                                        It is a long established fact that a reader will be distracted by the readable
                                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                                        'Content here, content here', making it look like readable English.
                                                    </td>
                                                    <td>
                                                    	Category 1
                                                    </td>
                                                    <td>
                                                        <?php echo "₱ ".$gps->PRICE; ?>
                                                    </td>
                                                    <td>
                                                        <span class="label label-primary">Enable</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="btn-group">
                                                            <button class="btn-white btn btn-xs">Edit</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- <tr>
                                                    <td>
                                                        Example product 2
                                                    </td>
                                                    <td>
                                                        It is a long established fact that a reader will be distracted by the readable
                                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                                        'Content here, content here', making it look like readable English.
                                                    </td>
                                                    <td>
                                                    	Category 2
                                                    </td>
                                                    <td>
                                                        $40.00
                                                    </td>
                                                    <td>
                                                        <span class="label label-primary">Enable</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="btn-group">
                                                            <button class="btn-white btn btn-xs">Edit</button>
                                                        </div>
                                                    </td>
                                                </tr>
 -->                                    <?php
                                            endforeach;
                                        }
                                    ?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <ul class="pagination" style="position:absolute; bottom: 25px;right: 50px;"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>