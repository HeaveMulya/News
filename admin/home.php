<?php
include('header2.php');
include('db_connect.php');

?>
<br>
<div class="container-fluid">
<div class="row">
<div class="col-xl-5 col-md-4 mb-5" style="position: relative; padding-right: 12%; margin-left: -1%;">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-1">
                                            <div class=" ">
                                              <h6 class="text-xs font-weight-bold text-danger text-uppercase mb-1">  Total Categories</h6> </div>
                                            <div class="h5 mb-0 font-weight-bold ">
                                              
                                            <?php
                                            $select_order="select * from categories ";
                                            $result_query=mysqli_query($conn,$select_order);
                                            $row_count=mysqli_num_rows($result_query);
                                            echo"<h5>Total Categories<h5>" .$row_count;
                                          ?>                                             
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <!-- <i class="fa fa-dollar-sign fa-3x "></i> -->
                                        </div>
                                    </div>
                                    <div class="">                                     
                                           <a class="btn btn-danger mt-4" href="index.php?categories"> View categories Details </a>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-4 mb-5" style="position: relative; padding-right: 12%; margin-left: -1%;">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-1">
                                            <div class=" ">
                                              <h6 class="text-xs font-weight-bold text-success text-uppercase mb-1">  Total News</h6> </div>
                                            <div class="h5 mb-0 font-weight-bold ">
                                              
                                            <?php
                                            $select_order="select * from post_details ";
                                            $result_query=mysqli_query($conn,$select_order);
                                            $row_count=mysqli_num_rows($result_query);
                                            echo"<h5>Total News <h5>" .$row_count;
                                          ?>                                             
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <!-- <i class="fa fa-dollar-sign fa-3x "></i> -->
                                        </div>
                                    </div>
                                    <div class="">                                     
                                           <a class="btn btn-success mt-4" href="index.php?news"> View News Details </a>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-4 mb-5" style="position: relative; padding-right: 12%; margin-left: -1%;">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-1">
                                            <div class=" ">
                                              <h6 class="text-xs font-weight-bold text-warning text-uppercase mb-1">  Total Users</h6> </div>
                                            <div class="h5 mb-0 font-weight-bold ">
                                              
                                            <?php
                                            $select_order="select * from adminuser ";
                                            $result_query=mysqli_query($conn,$select_order);
                                            $row_count=mysqli_num_rows($result_query);
                                            echo"<h5>Total Users<h5>" .$row_count;
                                          ?>                                             
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <!-- <i class="fa fa-dollar-sign fa-3x "></i> -->
                                        </div>
                                    </div>
                                    <div class="">                                     
                                           <a class="btn btn-warning text-light mt-4" href="index.php?users"> View User Details </a>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
</div>

</div>

