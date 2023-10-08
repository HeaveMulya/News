<?php
$login=0;
$invalid=0;


if(isset($_POST['login'])){
    include ('admin/header2.php');
    include('admin/db_connect.php');
    $username = $_POST['username'];
    $Password= $_POST['pwd']; 
    $sql="select * from user where username='$username' and user_password='$Password' ";
    $result=mysqli_query($conn,$sql);
if($result){
    $num=mysqli_fetch_assoc($result);
if($num>0){    
    //echo"Login successfully";
     $login=1;
     session_start();
    $_SESSION['user']=$username;
    header('location:home.php');
         }
      else{
       //echo"invalid data";
       $invalid=1;

      }
   }
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</head>
<body>
    <div class="container-fluid">
    <?php
if($login){
  echo'
  <div class="alert alert-info alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Congratulation</strong> You have successfully login into the system.
</div>
';
}

?>
<?php
if($invalid){
  echo'
  <div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Ooops!</strong>the credential are not correct .
</div>
';
}

?>
 <main id="main" class=" bg-dark">
  		<div id="login-left">
  		</div>

        <div id="login_right">
            <div class="card">
                <div class="card-body">
                    
              <form role="form" class="center" action="login.php" method="post">
                <h2 style="text-align:center ;">Login</h2>
               
                <div class="form-group">
                  <label class="control-label" for="email">Username:</label>
                  <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                  <label class="control-label" for="pwd">Password:</label>
                  <input type="password" class="form-control" name="pwd">
                </div>
                  <div class="checkbox">
                    <label ><input type="checkbox">Remember Me</label>
                  </div>
                  <div>
                    <button  href="" class="btn btn-default" role="button" style="background-color: green;color:white" name="login">LOGIN
                 
      
</button></div><br>
                  <p style="margin-left:55px;">Forgot Your Password?<a href="">Recover Here</a></p>
                  <p style="margin-left:55px;">Dont have an account??<a href="index.php?register` ">signup Here</a></p>
                </form>
            

                </div>
            </div>
        </div>
     

</main>
                





            
          </div>
</body></html>
