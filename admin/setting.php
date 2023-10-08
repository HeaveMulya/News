

<?php
include 'db_connect.php';


if(isset($_POST['save_post'])){
  $s_title=$_POST['name'];
  $s_email=$_POST['email'];
  $s_contact=$_POST['contact'];
  $s_about_us=$_POST['about'];
     //accessing LOGO
     $sl_image=$_FILES['logo']['name'];
     //accessing image temp name
     $tl_image=$_FILES['logo']['tmp_name'];
     
         move_uploaded_file($tl_image,"./logo/$sl_image"); 
  //accessing images
  $s_image=$_FILES['img']['name'];
  //accessing image temp name
  $ts_image=$_FILES['img']['tmp_name'];
  
      move_uploaded_file($ts_image,"./images/$s_image"); 

	   $sql="select * from settings";
	   $result=mysqli_query($conn,$sql);
	   if($result){
	 	$num=mysqli_num_rows($result);
	 	if($num>0){
			 $update_setting="update settings set name='$s_title',email='$s_email',contact='$s_contact',about_us='$s_about_us',logo='$sl_image',img='$s_image' ";
			 $update_result=mysqli_query($conn,$update_setting);
			 if($update_result){
			 	echo"alert('successfully updated')";
			 }
			 else{
				echo"alert('not successfully updated')";
			 }
		 }}
		 else{
			//insert query
			$insert_setting="insert into settings (name,email,contact,about_us,logo,img) values('$s_title','$s_email',$s_contact,'$s_about_us','$sl_image','$s_image')";
			$result_query=mysqli_query($conn,$insert_setting);
			if($result_query){
			  echo "<script>alert('Successfully inserted the post')</script>";
			  //header('location:index.php?settings');
			
			}
			else{
			  echo "<script>alert('not inserted the post')</script>";
			}

	
	 }

    
      
  }



?>


<br><?php
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
<div class="container-fluid">
	
	
	<div class="card col-lg-12">
		<div class="card-body">
			<form action="" id="manage-settings" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name" class="control-label">System Name</label>
					<input type="text" class="form-control" id="name" name="name" value="<?php echo"$name"?>"  required>
				</div>
				<div class="form-group">
					<label for="email" class="control-label">Email</label>
					<input type="email" class="form-control" id="email" name="email" value="<?php echo"$email"?>"  required>
				</div>
				<div class="form-group">
					<label for="contact" class="control-label">Contact</label>
					<input type="text" class="form-control" id="contact" name="contact"  value="<?php echo"$contact"?>"  required>
				</div>
				<div class="form-group">
					<label for="about" class="control-label">About Content</label>
					<textarea name="about" class="text-jqte" ><?php echo "$about_us";?></textarea>

				</div>
                <div class="form-group">
					<label for="" class="control-label">Logo</label>
					<input type="file" class="form-control" name="logo">
					<div class="form-group">
				 <img src="<?php echo 'images/'.$logo?>" id="climg" >
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Image</label>
					<input type="file" class="form-control" name="img">
					<div class="form-group">
				 <img src="<?php echo 'images/'.$img?>"  id="cimg">
					</div>
				</div>
				
				<div class="row">
						<div class="col-md-12">
							<button class="btn btn-sm btn-block btn-success col-sm-2" name="save_post"> Save</button>
						</div>
			</form>
		</div>
	</div>
	<style>
	img#cimg{
		max-height: 10vh;
		max-width: 6vw;
	}
	img#climg{
		max-height: 10vh;
		max-width: 6vw;
	}
</style>


</div>


