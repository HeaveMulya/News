<!-- Start of a Bootstrap column with a width of 2 -->
<div class="col-md-2"> 
    <!-- Categories Widget -->
    <br><br>
    <!-- Start of a card with custom styling -->
    <div class="card my-4 border-0">
        <!-- Card header -->
        <h5 class="card-header bg-white border-0">Categories</h5>
        <!-- Card body -->
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start of an unordered list for displaying categories -->
                    <ul class="list-unstyled mb-0">
                        <?php 
                        // Query to fetch category data from the database
                        $query = mysqli_query($conn, "select categorie_id, Categorie_name from categories");

                        // Loop through the results and display each category
                        while($row = mysqli_fetch_array($query))
                        {
                        ?>
                        <!-- List item for a category with a link -->
                        <li class="mb-2">
                            <a href="index.php?catid=<?php echo htmlentities($row['categorie_id'])?>" class="text-secondary">
                                <!-- Display the category name from the database -->
                                <?php echo htmlentities($row['Categorie_name']);?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                    <!-- End of the unordered list -->
                </div>
            </div>
        </div>
        <!-- End of the card body -->
    </div>
    <!-- End of the card -->
</div>
<!-- End of the Bootstrap column -->
