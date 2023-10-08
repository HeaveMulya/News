<?php include 'db_connect.php'; ?>
<?php

if(isset($_POST['save_post'])){
  $p_title=$_POST['title'];
  $p_category=$_POST['category_id'];
  $p_description=$_POST['description'];
  //accessing images
  $p_image=$_FILES['img']['name'];
  //accessing image temp name
  $t_image=$_FILES['img']['tmp_name'];
  
      move_uploaded_file($t_image,"./images/$p_image"); 
      //insert query
      $insert_product="insert into post_details (post_title,post_category_id,post_description,post_img) values('$p_title','$p_category','$p_description','$p_image')";
      $result_query=mysqli_query($conn,$insert_product);
      if($result_query){
        echo "<script>alert('Successfully inserted the post')</script>";
        //header('location:index.php?news');
      }
      else{
        echo "<script>alert('not inserted the post')</script>";
      }
  }



?>


<style>
	
	.jqte_editor{
		min-height: 30vh !important
	}
	#drop {
   	min-height: 15vh;
    max-height: 30vh;
    overflow: auto;
    width: calc(100%);
    border: 5px solid #929292;
    margin: 10px;
    border-style: dashed;
    padding: 10px;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}
	#uploads {
		min-height: 15vh;
	width: calc(100%);
	margin: 10px;
	padding: 10px;
	display: flex;
	align-items: center;
	flex-wrap: wrap;
	}
	#uploads .img-holder{
	    position: relative;
	    margin: 1em;
	    cursor: pointer;
	}
	#uploads .img-holder:hover{
	    background: #0095ff1f;
	}
	#uploads .img-holder .form-check{
	    display: none;
	}
	#uploads .img-holder.checked .form-check{
	    display: block;
	}
	#uploads .img-holder.checked{
	    background: #0095ff1f;
	}
	#uploads .img-holder img {
		height: 39vh;
    width: 22vw;
    margin: .5em;
		}
	#uploads .img-holder span{
	    position: absolute;
	    top: -.5em;
	    left: -.5em;
	}
	#dname{
		margin: auto 
	}
img.imgDropped {
    height: 16vh;
    width: 7vw;
    margin: 1em;
}
.imgF {
    border: 1px solid #0000ffa1;
    border-style: dashed;
    position: relative;
    margin: 1em;
}
span.rem.badge.badge-primary {
    position: absolute;
    top: -.5em;
    left: -.5em;
    cursor: pointer;
}
label[for="chooseFile"]{
	color: #0000ff94;
	cursor: pointer;
}
label[for="chooseFile"]:hover{
	color: #0000ffba;
}
.opts {
    position: absolute;
    top: 0;
    right: 0;
    background: #00000094;
    width: calc(100%);
    height: calc(100%);
    justify-items: center;
    display: flex;
    opacity: 0;
    transition: all .5s ease;
}
.img-holder:hover .opts{
    opacity: 1;

}
	input[type=checkbox]
{
  /* Double-sized Checkboxes */
  -ms-transform: scale(1.5); /* IE */
  -moz-transform: scale(1.5); /* FF */
  -webkit-transform: scale(1.5); /* Safari and Chrome */
  -o-transform: scale(1.5); /* Opera */
  transform: scale(1.5);
  padding: 10px;
}
button.btn.btn-sm.btn-rounded.btn-sm.btn-dark {
    margin: auto;
}
img#img_path-field{
		max-height: 15vh;
		max-width: 8vw;
	}
</style>
<br>
<div class="container-fluid">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group row">
						<div class="col-md-4">
							<label for="" class="control-label">POST TITLE</label>
							<input type="text" class="form-control" name="title"  required>
						</div>
					
					</div>
					<div class="form-group row">
						<div class="col-md-4">
							<label for="" class="control-label">Category</label>
							<select class="custom-select select2" name="category_id">
								
								<?php
								$cateretrevsql ="SELECT * FROM categories order by categorie_id asc";
								$cat_retreve_result=mysqli_query($conn,$cateretrevsql);
								while($row=mysqli_fetch_array($cat_retreve_result)){
									$name=$row['categorie_name'];
									$id=$row['categorie_id'];

								
								?>
								<option  name="categorie" value="<?php echo "$id";?>"><?php echo "$name"?></option>
								<?php } ?>
							</select>
						</div>
						
					</div>
					<div class="form-group row">
						<div class="col-md-10">
							<label for="" class="control-label">POST DETAILS</label>
							<textarea name="description" id="description" class="form-control" cols="30" rows="5" required><?php echo isset($description) ? html_entity_decode($description) : '' ?></textarea>
						</div>
					</div>

		
					<div class=" row form-group">
						<div class="col-md-5">
							<label for="" class="control-label">POST IMAGE</label>
							<input type="file" class="form-control" name="img" onchange="displayImg2(this,$(this))">
						</div>

						
					</div>
					<div class="row">
						<div class="col-md-12">
							<button class="btn btn-sm btn-block btn-success col-sm-2" name="save_post"> Save</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

