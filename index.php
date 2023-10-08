<!--<a href="test.php">test</a>-->
<?php 
include'NAVIGATION.php';

if(isset($_GET['nid'])){
   include 'news_description.php';
}
if(isset($_GET['about_us'])){
   include'about_us.php';
   
}
?>
<div class="row" style="margin-top: 0%">

<?php
if(!isset($_GET['nid'] )){
   if(!isset($_GET['about_us'])){
      include'category_retrival.php';

   }
                     
                    
                  }?>

      
            <div class="col-md-7 mt-3">
               <?php
               if(isset($_GET['catid'])){
                  include 'category.php';
               }
               if(!isset($_GET['catid']))
               {
                  if(!isset($_GET['nid'])){
                     if(!isset($_GET['about_us'])){
                        if(!isset($_GET['comment']))
                        {
                           if(!isset($_GET['register'])){

                        include'get_news.php';
                        
                     }}                    
                  }
                     
                  }

                 
               }
              if(isset($_GET['comment']))
              {
               include'comment.php';
              }
              if(isset($_GET['register'])){
               include 'Registration.php';
              }
              
               
               ?>
              

           
           

    </div>
   
 </div>
 <?php 
 include'footer.php';

 ?>
 