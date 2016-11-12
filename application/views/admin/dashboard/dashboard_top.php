<div class="row">
    <div class="col-md-4 padding-bottom">
        <div class="widget lazur-bg no-padding no-margins">
            <div class="p-m">
                <h3 class="font-bold no-margins">
                    Total Sales Gross
                </h3>
                <small>Sales Gross for this website.</small>
                <h1 class="m-xs text-center">₱ <?php print_r($get_income);?></h1>
            </div>
        </div>
    </div>
    <div class="col-md-4 padding-bottom">
        <div class="widget lazur-bg no-padding no-margins">
            <div class="p-m">
                <h3 class="font-bold no-margins">
                    Current Month
                </h3>
                <small>Sales Gross for this month.</small>
                <h1 class="m-xs text-center">₱ 
                    <?php
                        if (empty($gross_month)) {
                            echo "0.00";
                        }else{
                            foreach ($gross_month as $gm) {
                                $gross_month_ctr += $gm->PRICE;
                            }
                            echo $gross_month_ctr;
                        }
                    ?>
                </h1>
            </div>
        </div>
    </div>
    <div class="col-md-4 padding-bottom">
        <div class="widget lazur-bg no-padding no-margins">
            <div class="p-m">
                <h3 class="font-bold no-margins">
                    Current Year
                </h3>
                <small>Sales Gross for this Year.</small>
                <h1 class="m-xs text-center">₱ 
                    <?php
                        if (empty($gross_year)) {
                            echo "0.00";
                        }else{
                            foreach ($gross_year as $gm) {
                                $gross_year_ctr += $gm->PRICE;
                            }
                            echo $gross_year_ctr;
                        }
                    ?>
                </h1>
            </div>
        </div>
    </div>
</div>