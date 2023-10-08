<?php 

?>

<div class="container-fluid">
	<br>
	
	<div class="row">
	<div class="col-lg-12">
	<button type="button" class="btn btn-dark text-light float-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>New user
    
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">New User</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
<div class="container-fluid">
	
<?php 
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
                    header('location:index.php?users');
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
	<form action="" id="signup-frm" method="POST">
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
		

        
        <!-- Modal footer -->
        <div class="modal-footer">
		<button class="button btn btn-dark btn-sm " name="create">Create</button>
		<button class="button btn btn-warning btn-sm" type="button" data-dismiss="modal" name="cancel">Cancel</button>

        </div>
        
      </div>

    </div>
  </div>
  </form>
</div>


</div>

        </div>



		
	</div>
	</div>
	<br>
	<div class="row">
		<div class="card col-lg-12">
			<div class="card-body">
				<table class="table-striped table-bordered col-md-12">
			<thead>
				<tr>
					<th class="text-center">#</th>
					<th class="text-center">Name</th>
					<th class="text-center">Username</th>
					<th class="text-center">Type</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
 					include 'db_connect.php';
 					$users = $conn->query("SELECT * FROM adminuser order by name asc");
 					$i = 1;
 					while($row= $users->fetch_assoc()):
				 ?>
				 <tr>
				 	<td class="text-center">
				 		<?php echo $i++ ?>
				 	</td>
				 	<td>
				 		<?php echo ucwords($row['admin_name']) ?>
				 	</td>
				 	
				 	<td>
				 		<?php echo $row['name'] ?>
				 	</td>
				 	<td>
				 		<?php //echo $type[$row['type']] ?>
				 	</td>
				 	<td>
				 		<center>
								<div class="btn-group">
								  <button type="button" class="btn btn-outline-success">Action</button>
								  <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    
								  </button>
								  <div class="dropdown-menu">
								    <a class="dropdown-item edit_user" href="javascript:void(0)" data-id = '<?php echo $row['admin_id'] ?>'>Edit</a>
								    <div class="dropdown-divider"></div>
								    <a class="dropdown-item delete_user" href="javascript:void(0)" data-id = '<?php echo $row['admin_id'] ?>'>Delete</a>
								  </div>
								</div>
								</center>
				 	</td>
				 </tr>
				<?php endwhile; ?>
			</tbody>
		</table>
			</div>
		</div>
	</div>

</div>


  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  

