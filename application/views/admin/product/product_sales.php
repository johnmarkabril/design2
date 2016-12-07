
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content full-height">

                            <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                                <thead>
                                <tr>

                                    <th data-toggle="true">Product Name</th>
                                    <th data-hide="phone"><div class="pull-right">Price</div></th>

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
                                                        <div class="pull-right"><?php echo "₱ ".$gps->PRICE; ?></div>
                                                    </td>
                                                </tr>
                                    <?php
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