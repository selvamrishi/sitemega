<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>

    <head>
        
       <?php includeFileWithVariables('partials/title-meta.php', array('title' =>'Chartjs Charts')); ?>

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

                        <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Charts', 'title' =>'Chartjs Charts')); ?>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Line Chart</h4>
        
                                        <div class="row text-center">
                                            <div class="col-4">
                                                <h5 class="mb-0">86541</h5>
                                                <p class="text-muted text-truncate">Activated</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">2541</h5>
                                                <p class="text-muted text-truncate">Pending</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">102030</h5>
                                                <p class="text-muted text-truncate">Deactivated</p>
                                            </div>
                                        </div>
        
                                        <canvas id="lineChart" data-colors='["--bs-primary-rgb, 0.2", "--bs-primary", "--bs-light-rgb, 0.2", "--bs-light"]' height="300"></canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Bar Chart</h4>

                                        <div class="row text-center">
                                            <div class="col-4">
                                                <h5 class="mb-0">2541</h5>
                                                <p class="text-muted text-truncate">Activated</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">84845</h5>
                                                <p class="text-muted text-truncate">Pending</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">12001</h5>
                                                <p class="text-muted text-truncate">Deactivated</p>
                                            </div>
                                        </div>
        
                                        <canvas id="bar" data-colors='["--bs-success-rgb, 0.8", "--bs-success"]' height="300"></canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Pie Chart</h4>
        
                                        <div class="row text-center">
                                            <div class="col-4">
                                                <h5 class="mb-0">2536</h5>
                                                <p class="text-muted text-truncate">Activated</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">69421</h5>
                                                <p class="text-muted text-truncate">Pending</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">89854</h5>
                                                <p class="text-muted text-truncate">Deactivated</p>
                                            </div>
                                        </div>
        
                                        <canvas id="pie" data-colors='["--bs-success", "#ebeff2"]' class="chartjs-chart"></canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Donut Chart</h4>
        
                                        <div class="row text-center">
                                            <div class="col-4">
                                                <h5 class="mb-0">9595</h5>
                                                <p class="text-muted text-truncate">Activated</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">36524</h5>
                                                <p class="text-muted text-truncate">Pending</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">62541</h5>
                                                <p class="text-muted text-truncate">Deactivated</p>
                                            </div>
                                        </div>
        
                                        <canvas id="doughnut" data-colors='["--bs-primary", "#ebeff2"]' class="chartjs-chart"></canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title mb-4">Polar Chart</h4>

                                        <div class="row text-center">
                                            <div class="col-4">
                                                <h5 class="mb-0">4852</h5>
                                                <p class="text-muted text-truncate">Activated</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">3652</h5>
                                                <p class="text-muted text-truncate">Pending</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">85412</h5>
                                                <p class="text-muted text-truncate">Deactivated</p>
                                            </div>
                                        </div>
        
                                        <canvas id="polarArea" data-colors='["--bs-danger", "--bs-success", "--bs-warning", "--bs-primary"]' class="chartjs-chart"> </canvas>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Radar Chart</h4>

                                        <div class="row text-center">
                                            <div class="col-4">
                                                <h5 class="mb-0">694</h5>
                                                <p class="text-muted text-truncate">Activated</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">55210</h5>
                                                <p class="text-muted text-truncate">Pending</p>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">489498</h5>
                                                <p class="text-muted text-truncate">Deactivated</p>
                                            </div>
                                        </div>
        
                                        <canvas id="radar" data-colors='["--bs-success-rgb, 0.2", "--bs-success", "--bs-primary-rgb, 0.2", "--bs-primary"]' class="chartjs-chart"></canvas>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

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

        <!-- Chart JS -->
        <script src="assets/libs/chart.js/chart.umd.js"></script>
        <script src="assets/js/pages/chartjs.init.js"></script> 

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
