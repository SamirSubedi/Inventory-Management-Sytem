
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">NEW NAMASTE IMPEX</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right"><br><center><?php echo date("Y-m-d");?></center>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['uname'];?>
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                         <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                  
                        <li>
                            <a href="home.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>                        </li>
                        </li>
                        <li>
                            <a href="home.php"><i class="fa fa-file-pdf-o"></i>STOCK<span class="fa arrow"></span></a>
       <ul class="nav nav-second-level">
 <li>
                                    <a href="addstock.php">Add Product</a></li>
                                <li>
                                   <a href="viewstock.php">View Stock</a>                                </li>
                            </ul>                
                                              </li>
                        </li>
                         <li>
                            <a href="home.php"><i class="fa fa-camera"></i> SalesMan<span class="fa arrow"></span></a>
       <ul class="nav nav-second-level">
 <li>
                                    <a href="addsalesman.php">Add SalesMan </a></li>
                                <li>
                                   <a href="viewsalesman.php">View SalesMan</a>                                </li>
                            </ul>                
                                              </li>
                        </li>
                                              
                        <li>
                            <a href="home.php"><i class="fa  fa-group"></i>Report<span class="fa arrow"></span></a>        
                             <ul class="nav nav-second-level">
                                <li>
                                    <a href="datereport.php">Date Wise Sales Report</a></li>
                                <li>
                                   <a href="salesmanreport.php">SalesMan Report</a>                                </li>
                            </ul>                </li>
                        </li>
                         <li>
                            <a href="home.php"><i class="fa  fa-group"></i>Invoice<span class="fa arrow"></span></a>        
                             <ul class="nav nav-second-level">
                                <li>
                                    <a href="salesinvoice.php">Sales Invoice</a></li>
                                <li>
                                   <a href="salesmanreport.php">SalesMan Report</a>                                </li>
                            </ul>                </li>
                        </li>

                       <?php  $name=$_SESSION['uname'];
                          include 'connect.php';
                          $quer="Select permission from login where Username='$name' ";
$result=mysqli_query($con,$quer);
while($row = $result->fetch_assoc()) {
if($row['permission']=="Administrator"){


                       ?>
<li>
                            <a href="#"><i class="fa fa-instagram fa-fw"></i> USER<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="adduser.php">Add USER</a>                                </li>
                                <li>
                                    <a href="viewuser.php">View USER</a>                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
<li>
                            <a href="#"><i class="fa fa-file-photo-o fa-fw"></i> Suppliers<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="addsupplier.php">Add Suppliers</a></li>
                                <li>
                                   <a href="viewsgallery.php">View Suppliers</a>                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dollar"></i> Product Purchase<span class="fa arrow"></span></a>     
                                  <ul class="nav nav-second-level">
                                <li>
                                    <a href="addproduct.php">Add Purchase</a></li>
                                <li>
                                   <a href="viewmem.php">View Purchase</a>                                </li>
                            </ul>
                                               </li>
                        </li>
                        <li>
                            <a href="home.php"><i class="fa fa-dashboard fa-fw"></i>SALES<span class="fa arrow"></span></a>        
                             <ul class="nav nav-second-level">
                                <li>
                                    <a href="addsales.php">Add Sales</a></li>
                                <li>
                                   <a href="viewsales.php">View Sales</a>                                </li>
                            </ul>                </li>
                        </li>
                      


                        
                      
                     <?php }}?>
                         
                        </ul>
                        
</div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

