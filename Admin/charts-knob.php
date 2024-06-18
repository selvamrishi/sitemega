<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>
    
    <head>
        
       <?php includeFileWithVariables('partials/title-meta.php', array('title' =>'Jquery Knob Charts')); ?>

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

                        <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Charts', 'title' =>'Jquery Knob Charts')); ?>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Examples</h4>
                                        <p class="card-title-desc">Nice, downward compatible, touchable, jQuery dial</p>
        
                                        <div class="row">
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="text-center" dir="ltr">
                                                    <h5 class="font-size-14 mb-3">Disable display input</h5>
                                                    <input class="knob" data-width="150" data-fgcolor="#556ee6" data-displayinput="false" value="35">
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="text-center" dir="ltr">
                                                    <h5 class="font-size-14 mb-3">Cursor mode</h5>
                                                    <input class="knob" data-width="150" data-cursor="true" data-fgcolor="#34c38f" value="29">
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="text-center" dir="ltr">
                                                    <h5 class="font-size-14 mb-3">Display previous value</h5>
                                                    <input class="knob" data-width="150" data-min="-100" data-fgcolor="#50a5f1" data-displayprevious="true" value="44">
                                                </div>
                                            </div>
                                            
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="text-center" dir="ltr">
                                                    <h5 class="font-size-14 mb-3">Angle offset</h5>
                                                    <input class="knob" data-width="150" data-angleoffset="90" data-linecap="round" data-fgcolor="#f1b44c" value="35">
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="text-center" dir="ltr">
                                                    <h5 class="font-size-14 mb-3"> 5-digit values, step 1000</h5>
                                                    <input class="knob" data-width="150" data-min="-15000" data-displayprevious="true" data-max="15000" data-step="1000" value="-11000" data-fgcolor="#2a3142">
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="text-center" dir="ltr">
                                                    <h5 class="font-size-14 mb-3">Angle offset and arc</h5>
                                                    <input class="knob" data-width="150" data-cursor="true" data-fgcolor="#f46a6a" value="29">
                                                </div>
                                            </div>
                                            
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="text-center" dir="ltr">
                                                    <h5 class="font-size-14 mb-3">Readonly</h5>
                                                    <input class="knob" data-width="150" data-height="150" data-linecap=round
                                                            data-fgColor="#f06292" value="80" data-skin="tron" data-angleOffset="180"
                                                            data-readOnly=true data-thickness=".1"/>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="text-center" dir="ltr">
                                                    <h5 class="font-size-14 mb-3"> Angle offset and arc</h5>
                                                    <input class="knob" data-width="150" data-height="150"
                                                    data-displayPrevious=true data-fgColor="#8d6e63" data-skin="tron"
                                                    data-cursor=true value="75" data-thickness=".2" data-angleOffset=-125
                                                    data-angleArc=250 value="44"/>
                                                </div>
        
                                            </div>
                                        </div>
        
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

        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script> 

        <script src="assets/js/pages/jquery-knob.init.js"></script> 

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
