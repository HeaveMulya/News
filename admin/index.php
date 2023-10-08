<?php
//if(isset($_SESSION['username'])){
 // header('location:login.php');
//}
include('header2.php');
//include('header.php');


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    

</head>
<body> 
  <br>

    <div class="container-fluid p-0">
  
<nav class="navbar navbar-expand-md  navbar-dark bg-dark fixed-top" style="padding:0;min-height: 3.5rem;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		
      <div class="col-md-4 float-left text-white">
        <large><b>Admin Dashboard</b></large>
      </div>
      
	  	<div class="float-right">
        <div class=" dropdown mr-4">
            <a href="#" class="text-white dropdown-toggle"  id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <h6 ><?php 
              if(isset($_SESSION['user'])){
                echo "".$_session['user'];
              }
              else{
                echo"username not set";
              }
              ?> </h6>
              </a>
              <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
                <a class="dropdown-item" href="javascript:void(0)" id="manage_my_account"><i class="fa fa-cog"></i> Manage Account</a>
                <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> Logout</a>
              </div>
        </div>
      </div>
  </div>
  
</nav>
<br>




<div class="row">
  <div class="col-3">
  <nav id="sidebar" class='mx-lt-5 bg-dark '>
		
		<div class="sidebar-list">
				<a href="index.php?home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?categories" class="nav-item nav-categories"><span class='icon-field'><i class="fa fa-list"></i></span> Categories</a>
				<a href="index.php?news" class="nav-item nav-products"><span class='icon-field'><i class="fa fa-file"></i></span> News</a>
			<a href="index.php?comment" class="nav-item nav-bids"><span class='icon-field'><i class="fas fa-comment"></i></span>Comment</a>
				<?php //if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
				<a href="index.php?settings" class="nav-item nav-site_settings "><span class='icon-field'><i class="fa fa-cogs"></i></span> System Settings</a>
			<?php //endif; ?>
		</div>

</nav>

  </div>
  <div class="col-9">
    <div class="container">

    <?php
    
        if(!isset($_GET['home'])){
        if(!isset($_GET['categories'])){
        if(!isset($_GET['news'])){
        if(!isset($_GET['users'])){
        if(!isset($_GET['settings'])){
        if(!isset($_GET['comment']))
        if(!isset($_GET['add_news'])){
        if(!isset($_GET['add_user'])){
          include'home.php';

            }
          }
          

              }

            }

          }

          }
           
           
        }
        if(isset($_GET['home'])){
          include'home.php';
        }
      if(isset($_GET['categories'])){
        include('categories.php');
      }
      if(isset($_GET['news'])){
        include('news.php');
      }
      
      if(isset($_GET['add_news'])){
        include("add_news.php");
      }
      if(isset($_GET['users'])){
       include("user.php");
      }
      if(isset($_GET['add_user'])){
        include("add_user.php");
     }
     if(isset($_GET['settings'])){
      include("setting.php");
   }
                
                  
    
    
      
      
      
?>
    
   
    </div>
  </div>
</div>


    </div>





</body>
</html>