<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>

    <head>
        
       <?php includeFileWithVariables('partials/title-meta.php', array('title' =>'Leaflet Maps')); ?>

        <!-- leaflet Css -->
        <link href="assets/libs/leaflet/leaflet.css" rel="stylesheet" type="text/css" />

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

                        <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Maps', 'title' =>'Leaflet Maps')); ?>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Example</h4>
                                        <div id="leaflet-map" class="leaflet-map"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Markers, circles and polygons</h4>
                                        <div id="leaflet-map-marker" class="leaflet-map"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Working with popups</h4>
                                        <div id="leaflet-map-popup" class="leaflet-map"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Markers with Custom Icons</h4>
                                        <div id="leaflet-map-custom-icons" class="leaflet-map"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Interactive Choropleth Map</h4>

                                        <div id="leaflet-map-interactive-map" class="leaflet-map"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Layer Groups and Layers Control</h4>
                                        <div id="leaflet-map-group-control" class="leaflet-map"></div>
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
        <!-- leaflet plugin -->
        <script src="assets/libs/leaflet/leaflet.js"></script>

        <!-- leaflet map.init -->
        <script src="assets/js/pages/leaflet-us-states.js"></script>
        <script src="assets/js/pages/leaflet-map.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
