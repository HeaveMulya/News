

<h4 class="widget-title mb-4 text-dark ">Today  <span>Trending News</span></h4>
               <!-- Blog Post -->
               <div class="row">
               <div class="col-md-12">
                  <div class="owl-carousel owl-theme" id="slider">
                     <div class="card mb-4 border-0">
                        <img class="card-img-top" src="admin/postimages/im.jpg" alt="" width="100%">
                        <div class="card-body">
                           <p class="m-0">
                              <!--category-->
                              <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Sports</a>
                              <!--Subcategory--->
                              <a class="badge bg-warning text-decoration-none link-light"  style="color:#fff">Sports</a>
                           </p>
                           <p class="m-0"><small> Posted on 2022-11-11 00:20:09</small></p>
                           <a href="#" class="card-title text-decoration-none text-dark">
                              <h5 class="card-title">T20 World Cup 2022: Semi-final 1, England vs New Zealand Who Said What</h5>
                           </a>
                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div></div>
                     </div>
                                 </div>
                                 <?php 
                    
                    $sql="select * from post_details,categories where categories.categorie_id=post_details.post_category_id limit 8";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $title=$row['post_title'];
                            $category=$row['post_category_id'];
                            $description=$row['post_description'];
                            $img=$row['post_img'];
                            $categoryname=$row['categorie_name'];
                        
                     ?>
                          
                
                  <div class="col-md-6 ">
                 
                
                    <div class="card-body">
                     
                             
                                 <div class="card">
                              <div class="float-right align-top bid-tag">
                                    <span class="badge badge-pill badge-success text-white">Posted on <?php echo htmlentities($row['post_date']);?></span>
                                     </div>
                                     <img class="card-img-top"  src="<?php echo 'admin/images/'.$img?>" alt="Card image cap" height="250px">
                                      <div class="float-right align-top ">
                                      <a class="badge bg-primary text-decoration-none link-light badge badge-pill badge-danger text-white" href="category.php?catid=<?php echo htmlentities($category)?>" style="color:#fff"><?php echo htmlentities($categoryname);?></a>
                                      <div class="float-right align-top ">
                                         <span class="badge badge-pill  text-dark"><i class="fas fa-share-square"></i>  <?php //print $row['post_views']; ?></span>
                                     </div>
       
                                     <div class="float-right align-top ">
                                       
                               
                                 <a href="index.php?comment=<?php echo $row['post_id']?>" class="badge badge-pill  text-dark"  ><i class="fas fa-comments"></i>  <?php //print $row['post_views']; ?></a>
        
 </div>
 <div class="float-right align-top ">
                                         <span class="badge badge-pill  text-dark"><i class="fa-regular fa-eye"></i>  <?php print $row['post_views']; ?></span>
                                     </div>

                                     </div>
                                     <div class="card-body prod-item">
                                        
                                         <a href="index.php?nid=<?php echo htmlentities($row['post_id'])?>" class="card-title text-decoration-none text-dark">
                              <h5 class="card-title"><?php echo htmlentities($title);?></h5>
                           </a>
                                        <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                                     </div>
                                    
                        </div>
                       
                        </div>
                      
                                    
                              
                               
                                
                             </div>
                             <?php }} ?>
                            
                    


                  

                     <!-- Pagination -->
                     <!-- <ul class="pagination justify-content-center mb-4">
                        <li class="page-item"><a href="?pageno=1"  class="page-link border-0">First</a></li>
                        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
                           <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link border-0">Prev</a>
                        </li>
                        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
                           <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link border-0">Next</a>
                        </li>
                        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link border-0">Last</a></li>
                        </ul> -->
                  </div>
                  <!-- Static -->
                  <div class="col-md-12">
                     <div class="card mb-4 mt-5 border-0">
                        <img class="card-img-top" src="admin/postimages/8bc5c30be91dca9d07c1db858c60e39f.jpg" alt="" width="100%">
                        <div class="card-body">
                           <p class="m-0">
                              <!--category-->
                              <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Sports</a>
                              <!--Subcategory--->
                              <a class="badge bg-warning text-decoration-none link-light"  style="color:#fff">Sports</a>
                           </p>
                           <p class="m-0"><small> Posted on 2022-11-11 00:20:09</small></p>
                           <a href="#" class="card-title text-decoration-none text-dark">
                              <h5 class="card-title">T20 World Cup 2022: Semi-final 1, England vs New Zealand Who Said What</h5>
                           </a>
                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div>
                     </div>
                  </div>
                  </div>
                  <?php
            include'leftnav.php';
            ?>
