 <!-- Masthead-->
 <header class="masthead bg-info ">
            <div class="container h-100">
                <div class="row h-50 align-items-center justify-content-center text-center">
                    <div class="col-md-12 align-self-end mb-1  bg-success">
                    	 <h1 class="text-uppercase text-white font-weight-bold">About Us</h1>
                        <hr class="divider my-4 " />
                    </div>
                    
                </div>
            </div>
        </header>

    <section class="page-section bg-secondary">
        <div class="container ">
        <?php
        include 'admin/db_connect.php';
   $sql="select * from settings ";
   $result=mysqli_query($conn,$sql);
   $h=mysqli_fetch_assoc($result);
   $name=$h['name'];
   $email=$h['email'];
   $contact=$h['contact'];
   $about_us=$h['about_us'];
   $logo=$h['logo'];
   $img=$h['img'];
?>
<?php echo html_entity_decode($about_us) ?>         
            
        </div>
        </section>