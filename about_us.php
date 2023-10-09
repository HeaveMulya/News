<!-- Start of Masthead section -->
<header class="masthead bg-info">
    <div class="container h-100">
        <div class="row h-50 align-items-center justify-content-center text-center">
            <div class="col-md-12 align-self-end mb-1 bg-success">
                <!-- Heading for the About Us section -->
                <h1 class="text-uppercase text-white font-weight-bold">About Us</h1>
                <!-- Horizontal line divider -->
                <hr class="divider my-4" />
            </div>
        </div>
    </div>
</header>
<!-- End of Masthead section -->

<!-- Start of a page section with a secondary background -->
<section class="page-section bg-secondary">
    <div class="container">
        <?php
        // Include the 'db_connect.php' file to establish a database connection.
        include 'admin/db_connect.php';

        // SQL query to select data from the 'settings' table
        $sql = "select * from settings ";
        $result = mysqli_query($conn, $sql);
        $h = mysqli_fetch_assoc($result);
        $name = $h['name'];
        $email = $h['email'];
        $contact = $h['contact'];
        $about_us = $h['about_us'];
        $logo = $h['logo'];
        $img = $h['img'];
        ?>

        <!-- Display the HTML content stored in the 'about_us' field after decoding it -->
        <?php echo html_entity_decode($about_us) ?>
    </div>
</section>
<!-- End of page section -->
