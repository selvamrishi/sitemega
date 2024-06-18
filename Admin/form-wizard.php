<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>


    <head>
        
       <?php includeFileWithVariables('partials/title-meta.php', array('title' =>'Form Wizard')); ?>

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

                        <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Forms', 'title' =>'Form Wizard')); ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Basic Wizard</h4>

                                        <div id="basic-example">
                                            <!-- 1.Details -->
                                            <h3>1.Details</h3>
                                            <section>
                                            <style>
        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .form-container, .info-container {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            width: 48%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container {
            background-color: white;
        }

        .form-container label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .form-container input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container .consultation-time {
            display: flex;
            align-items: center;
        }

        .form-container .consultation-time input {
            width: auto;
            margin-right: 10px;
            text-align: center;
        }

        .info-container {
            background-color: #e9e9e9;
        }

        .info-container h2 {
            margin-top: 0;
        }

        .info-container p {
            margin-bottom: 20px;
        }
    </style>

    <div class="container">
        <div class="form-container">
            <label for="room-name">Room Name</label>
            <input type="text" id="room-name" name="room-name">

            <label for="description">Description</label>
            <input type="text" id="description" name="description">

            <label for="consultation-time">Consultation Time</label>
            <div class="consultation-time">
                <input type="number" id="consultation-time" name="consultation-time" value="4" min="1">
                <span> X 15 min = 60 Minutes</span>
            </div>

            <label for="cost">Cost $</label>
            <input type="text" id="cost" name="cost">
        </div>

        <div class="info-container">
            <h2>Virtual Consultation Room Setup</h2>
            <p>Welcome to our Virtual Consultation Room! Here, we provide a comprehensive and professional environment for your client meetings. Below, you'll find resources and links to enhance your consultation experience, including external links to professional bodies, universities, and specialists.</p>

            <h3>Resources:</h3>
            <p>Upload documents, reports, and presentations relevant to your consultation. Access to external links for professional bodies, universities, and specialists. Set the mood with customizable backgrounds and themes for a professional and comfortable atmosphere.</p>

            <p>Schedule and manage appointments seamlessly with integrated calendar tools. Secure communication channels for confidential discussions and file sharing. Prepare for your consultation and make the most of your time with our carefully curated resources and user-friendly interface. Your clients will appreciate the professionalism and efficiency of our Virtual Consultation Room.</p>
        </div>
    </div>
                                            </section>

                                            <!-- 2.Links -->
                                            <h3>2.Links</h3>
                                            <section>
                                            <div class="container mt-4">
        <h1>Canine - Quality of Life</h1>
       
        <form action="process_link.php" method="post" class="mt-4">
            <div class="form-group">
                <label for="link_name">Link Name</label>
                <input type="text" id="link_name" name="link_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="url_link">URL Link</label>
                <input type="url" id="url_link" name="url_link" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="type_of_link">Type of Link</label>
                <select id="type_of_link" name="type_of_link" class="form-control">
                    <option value="image">Image</option>
                    <option value="video">Video</option>
                    <option value="document">Document</option>
                    <option value="professional_body">Professional Body</option>
                    <option value="university">University</option>
                    <option value="specialist">Specialist</option>
                </select>
            </div>
            <div class="form-group">
                <strong>Provider</strong>
                <div>
                    <input type="checkbox" id="provider_portal" name="provider_portal">
                    <label for="provider_portal">Portal</label>
                    <input type="checkbox" id="provider_website" name="provider_website">
                    <label for="provider_website">Website</label>
                </div>
            </div>
            <div class="form-group">
                <strong>Client</strong>
                <div>
                    <input type="checkbox" id="client_portal" name="client_portal">
                    <label for="client_portal">Portal</label>
                    <input type="checkbox" id="client_email_pre" name="client_email_pre">
                    <label for="client_email_pre">Email Pre-consult</label>
                    <input type="checkbox" id="client_email_post" name="client_email_post">
                    <label for="client_email_post">Email Post-consult</label>
                    <input type="checkbox" id="client_descretion" name="client_descretion">
                    <label for="client_descretion">Descretion</label>
                </div>
            </div>
            
        </form>
        <script>
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $link_name = htmlspecialchars($_POST['link_name']);
    $url_link = htmlspecialchars($_POST['url_link']);
    $type_of_link = htmlspecialchars($_POST['type_of_link']);
    $provider_portal = isset($_POST['provider_portal']) ? 'Yes' : 'No';
    $provider_website = isset($_POST['provider_website']) ? 'Yes' : 'No';
    $client_portal = isset($_POST['client_portal']) ? 'Yes' : 'No';
    $client_email_pre = isset($_POST['client_email_pre']) ? 'Yes' : 'No';
    $client_email_post = isset($_POST['client_email_post']) ? 'Yes' : 'No';
    $client_descretion = isset($_POST['client_descretion']) ? 'Yes' : 'No';

    // Process form data (e.g., save to database, send email, etc.)
    // For demonstration, we will just display the data
    echo "<h1>Form Submitted</h1>";
    echo "<p>Link Name: " . $link_name . "</p>";
    echo "<p>URL Link: " . $url_link . "</p>";
    echo "<p>Type of Link: " . $type_of_link . "</p>";
    echo "<p>Provider Portal: " . $provider_portal . "</p>";
    echo "<p>Provider Website: " . $provider_website . "</p>";
    echo "<p>Client Portal: " . $client_portal . "</p>";
    echo "<p>Client Email Pre-consult: " . $client_email_pre . "</p>";
    echo "<p>Client Email Post-consult: " . $client_email_post . "</p>";
    echo "<p>Client Descretion: " . $client_descretion . "</p>";
} else {
    echo "Invalid request method.";
}
        </script>
    </div>
                                            </section>
                                              
                                             <!-- 3.Images -->
                                             <h3>3.Images</h3>
                                            <section>
                                            <div class="container">
        <form>
            <!-- Image Upload -->
            <div class="form-group mb-3 col-lg-2">
                <label for="imageUpload">Upload Image</label>
                <input type="file" class="form-control-file" id="imageUpload" name="imageUpload">
            </div>

            <!-- Image Description -->
            <div class="form-group mb-3 col-lg-2">
                <label for="imageDescription">Image Description</label>
                <input type="text" class="form-control" id="imageDescription" name="imageDescription" placeholder="Enter image description">
            </div>

            <!-- Provider -->
            <div class="form-group mb-3 col-lg-2">
                <label>Provider</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="providerPortal" name="provider" value="portal">
                    <label class="form-check-label" for="providerPortal">Portal</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="providerWebsite" name="provider" value="website">
                    <label class="form-check-label" for="providerWebsite">Website</label>
                </div>
            </div>

            <!-- Client -->
            <div class="form-group mb-3 col-lg-2">
                <label>Client</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="clientPortal" name="client" value="portal">
                    <label class="form-check-label" for="clientPortal">Portal</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="clientEmailPreConsult" name="client" value="email-pre-consult">
                    <label class="form-check-label" for="clientEmailPreConsult">Email Pre-Consult</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="clientEmailPostConsult" name="client" value="email-post-consult">
                    <label class="form-check-label" for="clientEmailPostConsult">Email Post-Consult</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="clientDiscretion" name="client" value="discretion">
                    <label class="form-check-label" for="clientDiscretion">Discretion</label>
                </div>
            </div>

            <!-- Submit Button -->
            
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                                            </section>
                                            
                                             <!-- 4.Documentation -->
                                             <h3>4.Documentation</h3>
                                            <section>
                                               
                                            </section>

                                            <!-- 5.Products & Services -->
                                            <h3>5.Products & Services</h3>
                                            <section>
                                                
                                            </section>

                                            <!-- 6.Theme -->
                                            <h3>6.Theme</h3>
                                            <section>
                                               
                                            </section>

                                             <!-- 7.Preview -->
                                             <h3>7.Preview</h3>
                                            <section>
                                               
                                            </section>
                                        </div>

                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
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

        <!-- jquery step -->
        <script src="assets/libs/jquery-steps/build/jquery.steps.min.js"></script>

        <!-- form wizard init -->
        <script src="assets/js/pages/form-wizard.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
