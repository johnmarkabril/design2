        <div class="animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Total Sales Gross</h5>
                            <div class="ibox-tools">Year: <?php echo $year;?></div>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="lineChart" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>User Activity</h5>
                            <div class="ibox-tools">Year: <?php echo $year;?></div>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="barChart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Most Product Sell</h5>
                            <div class="ibox-tools">Year: <?php echo $year;?></div>
                        </div>
                        <div class="ibox-content">
                            <div class="text-center">
                                <canvas id="polarChart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>