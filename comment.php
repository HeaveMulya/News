<b><h4 class="">Comments</h4></b>
<?php 
            if(isset($_GET['comment'])){
                $com=$_GET['comment'];}
   $sql="select * from Comment left join user on user.user_id=Comment.user_id left join post_details on post_details.post_id=Comment.post_id where Comment.post_id=$com ";
   $result=mysqli_query($conn,$sql);
   $i=1;
   while($comm=mysqli_fetch_array($result)){

?>


<div class="card">
  <div class="card-header">
    <div class="d-flex ">
    <img class="rounded-circle" src="<?php echo 'admin/images/'.$comm['user_img']?>" alt="<?php // echo htmlentities($row['user_id']);?>" height="40px">
  <b><p class="px-2"><?php echo $comm['username'];?></p></b> 
  <p class="text-info">Posted on: <?php echo $comm['date']?></p> 
  </div>

  
  </div>
  <div class="card-body">
          
  <div class="d-flex">
      <p><?php echo $comm['comment_details']?></p>
            
            
           
           </div>
           <br>
  </div>
  <div class="card-footer"></div>
</div>

                   <!-- The Modal -->
             
            <?php
           }
              ?>   

<?php
           if(isset($_GET['comment'])){
            $co=$_GET['comment'];
            
            $sql="SELECT * FROM post_details WHERE post_details.post_id=$co ";
            $result=mysqli_query($conn,$sql);
            if($result){
             $ro=mysqli_fetch_assoc($result);
            }
          
          
           ?>

           <?php
           if(isset($_GET['comment'])){
          if(isset($_SESSION['user'])){
$k=$_SESSION['user'];
          
            
            $sql="SELECT * FROM user WHERE user.username='$k' ";
            $result=mysqli_query($conn,$sql);
            if($result){
             $r=mysqli_fetch_assoc($result);
            }
          
          }
           ?>
 
  <br>
  <div class="container">
     <form action="" id="signup-frm" method="POST">
        <div class="form-group">
       
      
        <input type="hidden" name="postid" value="<?php echo $ro['post_id']?>" required="" class="form-control">
        <input type="hidden" name="userid" value="<?php echo $r['user_id']?>" required="" class="form-control">
           
           <textarea name="comments"  class="form-control" cols="10" rows="5" required></textarea>
         
        </div>
      
       
  
          
          <!-- Modal footer -->
          <div class="float-right">
        <button class="button btn btn-dark btn-sm " name="create">Post Comment</button>
        <button class="button btn btn-warning btn-sm" type="button" data-dismiss="modal" name="cancel">Cancel</button>
  
        </div>
         
          
       
    </form>
   
  </div>
  
  
   <?php }} ?>
                  
   <?php 
  include_once('admin/db_connect.php');
  
  //checking if the request method is POST
  if(isset($_GET['comment'])){
      //if create button is clicked
      if(isset($_POST['create'])){
          //fetch the user input from the form
          $postid=$_POST['postid'];
          $userid=$_POST['userid'];
          $comments=$_POST['comments'];
                  $insersql="insert into Comment (post_id,user_id,comment_details,date) values($postid,'$userid','$comments',NOW())";
                  $insertresult=mysqli_query($conn,$insersql);
                  if($insertresult){
                    //  echo"<script>alert('Congratulation your COMMENTS has been POSTED successfully')</script>";
                     location:'index.php?comment';
                  }
                  else{
                    //  echo"Sorry there is problem with POSTING YOUR COMMENT .Please try again";
                  }
              
  
          
  
      }
  
  }
   ?>