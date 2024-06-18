<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>

    <head>
        
       <?php includeFileWithVariables('partials/title-meta.php', array('title' =>'Sparkline Charts')); ?>

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

                        <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Charts', 'title' =>'Sparkline Charts')); ?>

                        <div class="row">
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Pie Chart</h4>
                                        <div id="sparkline1"  data-colors='["--bs-success","--bs-primary", "--bs-light"]' class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Bar Chart</h4>
                                        <div id="sparkline2" data-colors='["--bs-success"]' class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body analytics-info">
                                        <h4 class="card-title">Line Chart</h4>
                                        <div id="sparkline4" data-colors='["--bs-primary"]'></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Composite Bar Chart</h4>
                                        <div id="sparkline3"  data-colors='["--bs-primary","--bs-success"]' class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Line Chart</h4>
                                        <div id="sparkline5" data-colors='["--bs-primary","--bs-success"]' class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <h4 class="card-title text-white">Discrete Chart</h4>
                                        <div id="sparkline6" data-colors='["--bs-white"]' class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Bullet Chart</h4>
                                        <div id="sparkline7"  data-colors='["--bs-primary", "--bs-danger"]'></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Box Plot Chart</h4>
                                        <div id="sparkline8" data-colors='["--bs-success"]' class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Tristate Chart</h4>
                                        <div id="sparkline9"  data-colors='["--bs-primary","--bs-success","--bs-danger"]' class="text-center"></div>
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

        <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        
        <script src="assets/js/pages/sparklines.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
