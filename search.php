<?php 
    ?>

<!DOCTYPE html>
<html lang="en">

  <head>

   

    <title>101 + News Station Portal | Search  Page</title>

  <body>

    <!-- Navigation -->
    

   <?php include 'NAVIGATION.php'; ?>

    <!-- Page Content -->
    <div class="container-fluid">


     
      <div class="row mt-0 pt-0">
      <?php
      include'category_retrival.php';?>

        <!-- Blog Entries Column -->
        <div class="col-md-7 mt-5">

          <!-- Blog Post -->
<?php 
include 'admin/db_connect.php';
        if($_POST['search']!=''){
$st=$_POST['search'];
}
             




    


$query=mysqli_query($conn," select * from post_details where  post_details.post_title like '%$st%' limit 8");

$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
echo "No record found";
}
else {
while ($row=mysqli_fetch_array($query)) {


?>

          <div class="card mb-4">
      <img class="card-img-top"src="<?php echo 'admin/images/'.$row['post_img']?>" alt="<?php echo htmlentities($row['post_title']);?>">
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['post_title']);?></h2>
         
              <a href="index.php?nid=<?php echo htmlentities($row['post_id'])?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo htmlentities($row['post_date']);?>
           
            </div>
          </div>
<?php } ?>

    <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
    </ul>
<?php } ?>
       

      

          <!-- Pagination -->




        </div>

        <!-- Sidebar Widgets Column -->
      <?php include('leftnav.php');?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->


 <script src="js/foot.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
</head>
  </body>

</html>
