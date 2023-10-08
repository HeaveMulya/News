<?php
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
          <footer class="py-5 bg-light">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h3 class="mt-0 text-dark">Contact Us</h3>
                        <hr class="divider my-2"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div class="text-dark"><?php echo $contact;?></div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                       
                        <a class="d-block" href="mailto:<?php echo $email;?>"><?php echo $email;?></a>
                    </div>
                  </div>
            </div>
            <br>
            <div class="container"><div class="small text-center text-muted">Copyright © 2020  <?php echo $name ?> </div></div>
        </footer>