<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>

    <head>
        
       <?php includeFileWithVariables('partials/title-meta.php', array('title' =>'E Charts')); ?>

        <?php include 'partials/head-css.php'; ?>

    </head>

    <?php include 'partials/body.php'; ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include 'partials/menu.php'; ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Charts', 'title' =>'E Charts')); ?>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Line Chart</h4>
                                        <div id="line-chart" data-colors='["--bs-success"]' class="e-charts"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Mix Line-Bar</h4>
                                        <div id="mix-line-bar"  data-colors='["--bs-success","--bs-primary", "--bs-danger"]' class="e-charts"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Doughnut Chart</h4>
                                        <div id="doughnut-chart" data-colors='["--bs-primary","--bs-warning", "--bs-danger","--bs-info", "--bs-success"]' class="e-charts"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Pie Chart</h4>
                                        <div id="pie-chart" data-colors='["--bs-primary","--bs-warning", "--bs-danger","--bs-info", "--bs-success"]' class="e-charts"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Scatter Chart</h4>
                                        <div id="scatter-chart" data-colors='["--bs-success"]' class="e-charts"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Bubble Chart</h4>
                                        <div id="bubble-chart" data-colors='["--bs-primary-rgb", "--bs-success-rgb"]' class="e-charts"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Candlestick Chart</h4>
                                        <div id="candlestick-chart" data-colors='["--bs-primary","--bs-success"]' class="e-charts"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Gauge Chart</h4>
                                        <div id="gauge-chart" data-colors='["--bs-success","--bs-primary","--bs-danger"]' class="e-charts"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <?php include 'partials/footer.php'; ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <?php include 'partials/right-sidebar.php'; ?>

        <?php include 'partials/vendor-scripts.php'; ?>

        <!-- echarts js -->
        <script src="assets/libs/echarts/echarts.min.js"></script>
        <!-- echarts init -->
        <script src="assets/js/pages/echarts.init.js"></script>
        
        <script src="assets/js/app.js"></script>

    </body>
</html>
