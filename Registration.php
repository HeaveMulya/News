<?php
//checking if the request method is POST
if($_SERVER['REQUEST_METHOD']=='POST'){
    //if create button is clicked
    if(isset($_POST['signup'])){
        //fetch the user input from the form
        $name=$_POST['name'];
        $contact=$_POST['contact'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        //accessing images
  $p_image=$_FILES['img']['name'];
  //accessing image temp name
  $t_image=$_FILES['img']['tmp_name'];
  
      move_uploaded_file($t_image,"./admin/images/$p_image"); 

        //validating the form data
        if($name==" "){
            echo"Name is required";
        }


        //checking if the username or email exits in db
        $checksql="select * from user where username='$username' ";
        $checkresult=mysqli_query($conn,$checksql);
        if($checkresult){
            
            $num=mysqli_num_rows($checkresult);
            if($num>0){
                echo "Sorry username already exits";
            }
            else{
                $insersql="insert into user(name,user_contact,user_address,user_email,username,user_img,user_password,date) values('$name',$contact,'$address','$email','$username','$p_image','$password',NOW())";
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
	<form action="" id="signup-frm" method="POST" enctype="multipart/form-data">
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
			<label for="" class="control-label">Profile Picture</label>
			<input type="File" name="img" required="" class="form-control">
		</div>
		<div class="form-group">
			<label for="" class="control-label">Password</label>
			<input type="password" name="password" required="" class="form-control">
		</div>
		<button class="button btn btn-primary btn-sm " name="signup">signup</button>
		<button class="button btn btn-secondary btn-sm" type="button" data-dismiss="modal" name="cancel">Cancel</button>

	</form>
</div>
