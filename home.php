<?php
include'NAVIGATION.php';


?>
<?php 
         if(isset($_SESSION['user'])){

        echo"  <div class='alert alert-success alert-dismissible fade show'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Welcome to Lyamuya Blog </strong> {$_SESSION['user']}
  </div>";
         }
        ?>