<?php 
if(isset($_GET['catid'])){
    $catid=$_GET['catid'];

}

    ?>




  
<?php
 $sql="select * from post_details left join categories on post_details.post_category_id=categories.categorie_id where post_details.post_category_id=$catid and categories.categorie_id=$catid limit 8";
 $result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($result);

?>

<h1 class="mt-0"><?php echo htmlentities($row['categorie_name']);?> NEWS</h1>
<?php

 $sql="select * from post_details left join categories on post_details.post_category_id=categories.categorie_id where post_details.post_category_id=$catid and categories.categorie_id=$catid limit 8";
 $result=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result);
if($rowcount==0)
{
echo "No record found";
}
else {
while ($row=mysqli_fetch_array($result)) {


?>


                    <div class="card-body">
                     
                             
                                 <div class="card">
                              <div class="float-right align-top bid-tag">
                                    <span class="badge badge-pill badge-success text-white">Posted on <?php echo htmlentities($row['post_date']);?></span>
                                     </div>
                                     <img class="card-img-top"  src="<?php echo 'admin/images/'.$row['post_img']?>" alt="Card image cap" width="100%">
                                      <div class="float-right align-top ">
                                      <a class="badge bg-primary text-decoration-none link-light badge badge-pill badge-danger text-white" href="index.php?catid=<?php echo htmlentities($row['categorie_id'])?>" style="color:#fff"><?php echo htmlentities($row['categorie_name']);?></a>
                                     
       
                                      <div class="float-right align-top ">
                                       
                               
                                       <a href="index.php?comment=<?php echo $row['post_id']?>" class="badge badge-pill  text-dark"  ><i class="fas fa-comments"></i>  <?php //print $row['post_views']; ?></a>
              
       </div>
                                     <div class="float-right align-top ">
                                         <span class="badge badge-pill  text-dark"><i class="fa-regular fa-eye"></i>  <?php print $row['post_views']; ?></span>
                                     </div>
                                     <div class="float-right align-top ">
                                         <span class="badge badge-pill  text-dark"><i class="fas fa-share-square"></i>  <?php //print $row['post_views']; ?></span>
                                     </div>
                                     </div>
                                     <div class="card-body prod-item">
                                        
                                         <a href="index.php?nid=<?php echo htmlentities($row['post_id'])?>" class="card-title text-decoration-none text-dark">
                              <h5 class="card-title"><?php echo htmlentities($row['post_title']);?></h5>
                           </a>
                           <a href="index.php?nid=<?php echo htmlentities($row['post_id'])?>" class="">Read More &rarr;</a>
                                     </div>
                                    
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

      
        <?php
            include'leftnav.php';
            ?>

 
  </body>

</html>
