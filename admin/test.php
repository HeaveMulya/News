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
								$rows_per_page=5;
                include 'db_connect.php';
                include 'header.php';
								$sql ="SELECT * FROM categories";
								$result=mysqli_query($conn,$sql);
								$count=mysqli_num_rows($result);
								$pages=ceil($page_divide=$count/$rows_per_page);
								if(isset($_GET['page_no'])){
									$page=$_GET['page_no']-1;
									$start=$page*$rows_per_page;
								}

								$cateretrevsql ="SELECT * FROM categories limit $start,$rows_per_page";
								$cat_retreve_result=mysqli_query($conn,$cateretrevsql);
								while($row=mysqli_fetch_array($cat_retreve_result)){
									$name=$row['categorie_name'];
									$id=$row['categorie_id'];

								
								?>
								<tr>
									<td class="text-center"><?php echo $id ?></td>
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
<?php 
if(isset($_GET['page_no']) && $_GET['page_no'] > 1 ){ 
  ?>
  <li class="page-item"><a class="page-link" href="?page_no=<?php $_GET['page_no'] - 1;?>">Previous</a></li>
<?php
}else{

?>

<li class="page-item"><a class="page-link">Previous</a></li>
  
 


  <?php  
  
}
  ?>





 
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>

  <?php
  if(!isset($_GET['page_no'])){ ?>
    <li class="page-item"><a class="page-link" href="?page_no=2">Next</a></li>
    <?php 
  }else{
    if($_GET['page_no']>=$pages){
    
    ?>
        <li class="page-item"><a class="page-link" >Next</a></li>
        <?php
    }else{

        ?>
            <li class="page-item"><a class="page-link" href="?page_no=<?php echo $_GET['page_no']+1;?>">Next</a></li>


  <?php }}
  ?>
 

  <li class="page-item"><a class="page-link" href="?page_no=<?php echo $pages ?>">Last</a></li>
</ul>

	</div>


	</div>
</div>