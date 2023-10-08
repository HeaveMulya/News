<?php
session_start();
//if(isset($_SESSION['username'])){
    //header('location:login.php');
    
//}

?>
<?php
include('admin/db_connect.php');
include'admin/header2.php';
?>
<head><title>News Portal</title></head>
    <body class="bg-light">
        <div class="container pt-3">
       <div class="row">

       <div class="col-md-12">



</div>

       </div>     

      
         
            
       
          <!--navigation bar-->
                <nav class="navbar fixed-top navbar-expand-md bg-success navbar-dark   text-decoration-none">
                    <!-- Brand -->
                    <?php
   $sql="select * from settings ";
   $result=mysqli_query($conn,$sql);
   $h=mysqli_fetch_assoc($result);
   $name=$h['name'];
   $email=$h['email'];
   $contact=$h['contact'];
   $about_us=$h['about_us'];
   $logo=$h['logo'];
   $img=$h['img'];
?>
<div class="text-left text-light">
    <h5><?php echo"$name";?></h5>
</div>
                 
                        
                    <!-- Toggler/collapsibe Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                      <ul class="navbar-nav  px-5 ">
                      <li class="nav-item ">
                          <a class="nav-link " href="index.php"><span class='icon-field'><i class="fa fa-home"></i></span>Home</a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link " href="index.php"><i class="fa fa-file"></i>News</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="index.php?about_us"><i class="fa fa-info-circle"></i>About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="contact_us.php"><i class="fa fa-phone"></i>contact us</a>
                        </li> 
                        <?php
                        if(isset($_SESSION['user'])){
                          echo"
                          <li class='nav-item'>
                          <a class='nav-link ' ><i class='fa fa-user'></i> {$_SESSION['user']}</a>
                        </li>
                          <li class='nav-item'>
                          <a class='nav-link ' href='logout.php'>Logout</a>
                        </li>
                          ";
                        }
                        else{
                          echo"
                          <li class='nav-item'>
                          <a class='nav-link ' href='login.php'>Login</a>
                        </li>
                          ";

                        }
                        ?>
                      </ul>
                    </div>
                  </nav>
                </div>