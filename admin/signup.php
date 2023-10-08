<?php session_start();
include('header.php');
include_once('db_connect.php');

//checking if the request method is POST
if($_SERVER['REQUEST_METHOD']=='POST'){
    //if create button is clicked
    if(isset($_POST['create'])){
        //fetch the user input from the form
        $name=$_POST['name'];
        $contact=$_POST['contact'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];

        //validating the form data
        if($name==" "){
            echo"Name is required";
        }


        //checking if the username or email exits in db
        $checksql="select * from adminuser where admin_name='$username' ";
        $checkresult=mysqli_query($conn,$checksql);
        if($checkresult){
            
            $num=mysqli_num_rows($checkresult);
            if($num>0){
                echo "Sorry username or Email already exits";
            }
            else{
                $insersql="insert into adminuser(name,contact,address,email,admin_name,admin_password) values('$name',$contact,'$address','$email','$username','$password')";
                $insertresult=mysqli_query($conn,$insersql);
                if($insertresult){
                    echo"Congratulation your account has been created successfully";
                    header('location:login.php');
                }
                else{
                    echo"Sorry there is problem with creating your account.Please try again";
                }
            }

        }

    }

}
 ?>
<div class="container-fluid">
	<form action="signup.php" id="signup-frm" method="POST">
		<div class="form-group">
			<label for="" class="control-label">Name</label>
			<input type="text" name="name" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Contact</label>
			<input type="text" name="contact" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Address</label>
			<textarea cols="30" rows="3" name="address" required="" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Email</label>
			<input type="email" name="email" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Username</label>
			<input type="text" name="username" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Password</label>
			<input type="password" name="password" required="" class="form-control">
		</div>
		<button class="button btn btn-primary btn-sm " name="create">Create</button>
		<button class="button btn btn-secondary btn-sm" type="button" data-dismiss="modal" name="cancel">Cancel</button>

	</form>
</div>

