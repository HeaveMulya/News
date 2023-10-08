<?php include('db_connect.php');



?>

<div class="container-fluid">
    <br>
	
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
			<form action="" id="manage-category" method="post">
				<div class="card">
					<div class="card-header">
						    Category Form
          
				  	</div>
					<div class="card-body">
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">Name</label>
								<input type="text" class="form-control" name="name">
							</div>
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-sm btn-dark text-light col-sm-3 offset-md-3" name="savecat"> Save</button>
								<button class="btn btn-sm btn-default col-sm-3" type="button" onclick="$('#manage-category').get(0).reset()"> Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			<!-- FORM Panel -->
			<?php
			//php for save categories
			if(isset($_POST['savecat'])){
				$name=$_POST['name'];

				$sql="select * from categories";
				$result=mysqli_query($conn,$sql);
				if($result){
					$num=mysqli_fetch_array($result);
					$name_re=$num['categorie_name'];
					if($name==$name_re){
						echo"
						<div class='toast ' data-autohide='false'>
    
   
      <button type='button' class='ml-2 mb-1 close' data-dismiss='toast'>&times;</button>
    
    <div class='toast-body'>
      Category already present
    </div>
  </div>
</div>";



					}
					else{
						$savecatsql="insert into categories (categorie_name) values('$name')";
				$savecatresult=mysqli_query($conn,$savecatsql);
				if($savecatresult){
					
					echo "<script>alert('Category has been saved successfully')</script>";
					//header('location:index.php?categories');
				}
				else{
					echo"alert('not saved')";
				}

					}
				}





				

			}
			
			?>

			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<b>Category List</b>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Category</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$start=0;
								$rows_per_page=4;

								$sql ="SELECT * FROM categories";
								$result=mysqli_query($conn,$sql);
								$count=mysqli_num_rows($result);
								$pages=ceil($page_divide=$count/$rows_per_page);
								if(isset($_GET['page_no'])){
									$page=$_GET['page_no']-1;
									$start=$page*$rows_per_page;
								}



								$cateretrevsql ="SELECT * FROM categories order by categorie_id asc limit $start,$rows_per_page";
								$cat_retreve_result=mysqli_query($conn,$cateretrevsql);
								while($row=mysqli_fetch_array($cat_retreve_result)){
									$name=$row['categorie_name'];
									$id=$row['categorie_id'];

								
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										<p><b><?php echo $name ?></b></p>
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-outline-success edit_category" type="button" data-id="<?php echo $id ?>"  data-name="<?php echo $name ?>" >Edit</button>
										<button class="btn btn-sm btn-outline-warning delete_category" type="button" data-id="<?php echo $id ?>">Delete</button>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
	
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<br>
<div class="row">
	<div class="col-md-4">
	
	</div>
	<div class="col-md-3">
	<div class="page-info">
		<p class="ml-3">showing 1 of <?php echo $pages ?> pages</p>
	</div>

	</div>
	<div class="col-md-5 ">
	
	<div class="pigination">
		<ul class="pagination justify-content-end">
<li class="page-item"><a class="page-link" href="?page_no=1">First</a></li>
  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">Next</a></li>
  <li class="page-item"><a class="page-link" href="?page_no=<?php echo $pages ?>">Last</a></li>
</ul>

	</div>


	</div>
</div>
	



<script>

</script>
