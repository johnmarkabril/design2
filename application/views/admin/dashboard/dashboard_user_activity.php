<div class="col-md-6 padding-bottom">
    <div class="widget navy-bg no-padding no-margins">
        <div class="p-m">
            <h3 class="font-bold no-margins">
                Total User Activity
            </h3>
            <small>Current month: 
            <?php
            			if (empty($activity_month)) {
                            echo "0";
                        }else{
                            echo $activity_month;
                        }
            ?>
            </small>
            <h1 class="m-xs text-center"><?php print_r($user_activity); ?></h1>
        </div>
    </div>
</div>