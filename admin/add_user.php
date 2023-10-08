<?php 
//php for saving user 
include_once('db_connect.php');

//checking if the request method is POST
if($_SERVER['REQUEST_METHOD']=='POST'){
    //if create button is clicked
    if(isset($_POST['save'])){
        //fetch the user input from the form
        $name=$_POST['name'];
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