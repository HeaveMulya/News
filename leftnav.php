<div class="col-md-3 mt-5">
   <!-- Search Widget -->
<!-- <h4 class="widget-title mb-5">Don't <span>Miss</span></h4> -->

   <div class="card mb-4 border-0">
      <h5 class="card-header border-0 bg-white">Search</h5>
      <div class="card-body">
         <form name="search" action="search.php" method="post">
            <div class="input-group">
               <input type="text" name="search" class="form-control rounded-0" placeholder="Search for..." required>
               <span class="input-group-btn">
               <button class="btn btn-secondary rounded-0 bg-success" type="submit"><i class="fa fa-search"></i>Search</button>
               </span>
         </form>
         </div>
      </div>
   </div>
   
   <!-- Side Widget -->
   <div class="card my-4 border-0">
      <h5 class="card-header border-0 bg-white">Recent News</h5>
      <div class="card-body">
         <ul class="mb-0 list-unstyled">
         <?php 
                    
                    $sql="select * from post_details,categories where categories.categorie_id=post_details.post_category_id  order by post_title asc limit 8 ";
                    $result=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($result)){
                            $title=$row['post_title'];
                            $category=$row['post_category_id'];
                            $description=$row['post_description'];
                            $img=$row['post_img'];
                            $categoryname=$row['categorie_name'];
                        
                     ?>
            <li class="d-flex mb-2 align-items-center">
               <img class="mr-2 rounded-circle" src="<?php echo 'admin/images/'.$img?>" alt="<?php echo htmlentities($title);?>" width="50px" height="50px">
               <a href="index.php?nid=<?php echo htmlentities($row['post_id'])?>" class="text-dark font-weight-bold"><?php echo htmlentities($title);?></a>
            </li>
            <?php } ?>
         </ul>
      </div>
   </div>
   <!-- Side Widget -->
   <div class="card my-4 border-0">
      <h5 class="card-header border-0 bg-white">Popular  News</h5>
      <div class="card-body">
         <ul class="list-unstyled">
            <?php
               
               $sql=mysqli_query($conn,"select * from post_details,categories where categories.categorie_id=post_details.post_category_id order by post_views desc  limit 5 ");
               while ($result=mysqli_fetch_array($sql)) {
               
               ?>
            <li class="mb-2">
            <img class="mr-2 rounded" src="<?php echo 'admin/images/'.$img?>" alt="<?php echo htmlentities($title);?>" width="50px" height="50px">

               <a href="index.php?nid=<?php echo htmlentities($result['post_id'])?>" class="text-dark font-weight-bold"><?php echo htmlentities($result['post_title']);?></a>
            </li>
            <?php } ?>
         </ul>
      </div>
   </div>
 
   <h5 class="card-header border-0 bg-transparent ">Most Popular</h5>
   <div class="card my-4 border-0">
      <div class="card-body p-2">
        <iframe width="100%" height="180px" class="youtube" src="https://www.youtube.com/embed/cuePLPooM80" title="Sample Videos / Dummy Videos For Demo Use" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
   </div>
   <div class="card my-4 border-0">
      <div class="card-body p-2">
        <iframe width="100%" height="180px" class="youtube" src="https://www.youtube.com/embed/6E6JPsLOABQ" title="Sample Videos / Dummy Videos For Demo Use" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
   </div>
   <div class="card my-4 border-0">
      <div class="card-body p-2">
        <iframe width="100%" height="180px" class="youtube" src="https://www.youtube.com/embed/HNekjkJgb7g" title="Sample Videos / Dummy Videos For Demo Use" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
   </div>
   <div class="card my-4 border-0">
      <div class="card-body p-2">
        <iframe width="100%" height="180px" class="youtube" src="https://www.youtube.com/embed/Ll8Bw8lcecw" title="Sample Videos / Dummy Videos For Demo Use" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
   </div>
   <div class="card my-4 border-0">
      <div class="card-body p-2">
        <iframe width="100%" height="180px" class="youtube" src="https://www.youtube.com/embed/gz73OAg2Tr0" title="Sample Videos / Dummy Videos For Demo Use" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
   </div>
</div>