
<!DOCTYPE html>
<html lang="en">
  
   <body>
      <!-- Navigation -->
      <!-- Page Content -->
      <div class="container-fluid">
         <div class="row mt-0" >
            <!-- Blog Entries Column -->
            <div class="col-md-9 mt-5">
               <!-- Blog Post -->
               <?php 
               include 'admin/db_connect.php';
               include 'admin/header2.php';
if(isset($_GET['nid'])){
    $nid=$_GET['nid'];
    $sql = "SELECT post_views FROM post_details WHERE post_id = '$nid'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["post_views"];
            $sql = "UPDATE post_details SET post_views = $visits+1 WHERE post_id ='$nid'";
    $conn->query($sql);

        }
    } else {
        echo "no results";
    }
    
   }

  
    
    $sql=" select * from post_details left join categories on post_details.post_category_id=categories.categorie_id where post_details.post_id=$nid limit 8";
 $result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($result)) {



    ?>
               <div class="card border-0">
                  <div class="card-body">
                     <!--category-->
                    <a class="badge bg-success text-decoration-none link-light" href="category.php?catid=<?php echo htmlentities($row['post_category_id'])?>" style="color:#fff"><?php echo htmlentities($row['categorie_name']);?></a>
                     <h1 class="card-title"><?php echo htmlentities($row['post_title']);?></h1>
                     <p><strong>Share:</strong> <a href="http://www.facebook.com/share.php?u=<?php echo $currenturl;?>" target="_blank"><i class='fab fa-facebook'></i></a> | 
                        <a href="https://twitter.com/share?url=<?php echo $currenturl;?>" target="_blank"><i class='fab fa-twitter'></i></a> |
                        <a href="https://web.whatsapp.com/send?text=<?php echo $currenturl;?>" target="_blank"><i class='fab fa-whatsapp'></i></a> | 
                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $currenturl;?>" target="_blank"><i class='fab fa-instagram'></i></a> 
                     </p>
                     <hr>
                     <img class="img-fluid w-100" src="<?php echo 'admin/images/'.$row['post_img']?>" alt="<?php echo htmlentities($row['post_title']);?>" height="50px" ><br><hr>
                     <div class="float-right align-top ">
                                       
                               
                                       <a href="index.php?comment=<?php echo $row['post_id']?>" class="badge badge-pill  text-dark"  ><i class="fas fa-comments"></i>  <?php //print $row['post_views']; ?></a>
              
       </div>
                                     <div class="float-right align-top ">
                                         <span class="badge badge-pill  text-dark"><i class="fa-regular fa-eye"></i>  <?php print $row['post_views']; ?></span>
                                     </div>
                                    
                                     
                     <p class="card-text"><?php 
                        $description=$row['post_description'];
                                      echo  (substr($description,0));?></p>
                  </div>
               
               </div>
               <?php } ?>
            </div>
            <!-- Sidebar Widgets Column -->
            <?php include('leftnav.php');?>
         </div>
         <!-- /.row -->
          <!---Comment Display Section --->
         
             
         <!---Comment Section --->
      </div>
            
               <hr>
              
         </div>
      </div>
   

 <script src="js/foot.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   </body>
</html>