<div class="col-md-2"> 
               <!-- Categories Widget -->
               <br><br>
               <div class="card my-4 border-0" >
                  <h5 class="card-header bg-white border-0">Categories</h5>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-lg-12">
                           <ul class="list-unstyled mb-0">
                              <?php 
                              $query=mysqli_query($conn,"select categorie_id,Categorie_name from categories");
                                 while($row=mysqli_fetch_array($query))
                                 {
                                 ?>
                              <li class=" mb-2">
                                 <a href="index.php?catid=<?php echo htmlentities($row['categorie_id'])?>" class="text-secondary"><?php echo htmlentities($row['Categorie_name']);?></a>
                              </li>
                              <?php } ?>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>