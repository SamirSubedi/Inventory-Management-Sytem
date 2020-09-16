<?php session_start();
if(isset($_SESSION['uname']))
{
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>INVENTORY MANAGEMENT SYSTEM</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header"><h4></h4>
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
                    <ul class="dropdown-menu dropdown-user"><?php echo date("Y-m-d");?>
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
                      
  <li>
                            <a href="home.php"><i class="fa fa-dashboard fa-fw"></i>RESTORE<span class="fa arrow"></span></a>        
                             <ul class="nav nav-second-level">
                                <li>
                                    <a href="restore.php">Check RESTORE</a></li>
                               
                            </ul>                </li>
                        </li>

                        
                      
                     <?php }}?>
                         
                        </ul>
                        
</div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 align="center"class="page-header">Inventory Management System</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">3</div>
                                    <div>USER</div>
                                    
                                </div>
                            </div>
                        </div>
                        <a href="viewausers.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    19</div>
                                    <div>Purchase</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewmem.php">
                            <div class="panel-footer">
                                <span class="pull-left">View purchase</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>

                    </div>

                </div>
                 <div class="col-lg-4 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-terminal fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    </div>
                                    <div>SALES</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewsales.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Sales</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        </div>
                    </div></div>
                     <div class="row">
                     <div class="col-lg-4 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-text fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    </div>
                                    <div>Report</div>
                                </div>
                            </div>
                        </div>
                        <a href="salesmanreport.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Report</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        
                    </div>
                           <!-- /.row -->
            </div>
            
             <div class="col-lg-4 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-save fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    </div>
                                    <div>Invoice</div>
                                </div>
                            </div>
                        </div>
                        <a href="salesinvoice.php">
                            <div class="panel-footer">
                                <span class="pull-left">Generate Invoice</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        
                    </div></div>
                     <div class="col-lg-4 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-table fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    </div>
                                    <div>Stock</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewstock.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Stock</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        
                    </div>
                           <!-- /.row -->
            </div>
        </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

<?php
}
else
{
header("location:login.php");
}
?>
</body>
</html>

