<?php include('db_connect.php');?>

<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>List of Post</b>
						<span class="float:right"><a class="btn btn-dark text-light btn-block btn-sm col-sm-2 float-right text-success"  href="index.php?add_news" id="new_product">
					<i class="fa fa-plus"></i> New Entry
				</a></span>
					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center ">#</th>
									<th class="">Img</th>
									<th class="">Category</th>
									<th class="">Post Title</th>
									<th class="">Post Category</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
                                $post_sql="select * from post_details order by post_title";
                                $post_result=mysqli_query($conn,$post_sql);
                                while($row=mysqli_fetch_assoc($post_result)){
                                    $title=$row['post_title'];
                                    $category=$row['post_category_id'];
                                    $description=$row['post_description'];
                                    $img=$row['post_img'];
                                
							?>
								<tr data-id= '<?php echo $row['post_id'] ?>'>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										 <div class="row justify-content-center">
										 	<img src="<?php echo 'images/'.$img?>" alt="">
										 </div>
									</td>
									<td>
										 <?php echo ucwords($category) ?>
									</td>
									<td>
										 <?php echo ucwords($title) ?>
										
									</td>
                                    <td>
                                    <?php echo $description ?>
                                    </td>
									
									<td class="text-center">
										<button class="btn btn-sm btn-outline-success edit_product" type="button" data-id="<?php echo $row['post_id'] ?>" >Edit</button>
										<button class="btn btn-sm btn-outline-warning delete_product"  type="button" data-id="<?php echo $row['post_id'] ?>">Delete</button>
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
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	table td img{
		max-width:100px;
		max-height: :150px;
	}
	img{
		max-width:100px;
		max-height: :150px;
	}
</style>
