
<!-- This line is an HTML comment. It's a hidden HTML link that's not used in the code. -->
<?php 
// Start of PHP code block

// Include the 'NAVIGATION.php' file for navigation purposes.
include 'NAVIGATION.php';

// Check if 'nid' is set in the query string and include 'news_description.php' if it is.
if(isset($_GET['nid'])){
   include 'news_description.php';
}

// Check if 'about_us' is set in the query string and include 'about_us.php' if it is.
if(isset($_GET['about_us'])){
   include 'about_us.php';
}
?>

<!-- Start of an HTML div with a row class and inline CSS styling -->
<div class="row" style="margin-top: 0%">

<?php
// Check if 'nid' is not set and 'about_us' is not set in the query string
if(!isset($_GET['nid']) && !isset($_GET['about_us'])){
   // Include 'category_retrival.php' if the condition is met.
   include 'category_retrival.php';
}
?>

<!-- Start of a div with a class of 'col-md-7' and margin-top styling -->
<div class="col-md-7 mt-3">
   <?php
   // Check if 'catid' is set in the query string and include 'category.php' if it is.
   if(isset($_GET['catid'])){
      include 'category.php';
   }

   // Check if 'catid' and other conditions are not met
   if(!isset($_GET['catid']) && !isset($_GET['nid']) && !isset($_GET['about_us']) && !isset($_GET['comment']) && !isset($_GET['register'])){
      // Include 'get_news.php' if the condition is met.
      include 'get_news.php';
   }
   
   // Check if 'comment' is set in the query string and include 'comment.php' if it is.
   if(isset($_GET['comment'])){
      include 'comment.php';
   }

   // Check if 'register' is set in the query string and include 'Registration.php' if it is.
   if(isset($_GET['register'])){
      include 'Registration.php';
   }
   ?>
</div>

</div>

<?php 
// Include the 'footer.php' file for the website's footer.
include 'footer.php';
?>

<!-- End of PHP code block -->