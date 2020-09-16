<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Admin Panel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
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
                            <!-- /.nav-second-level -->
                        </li>
<li>
                            <a href="#"><i class="fa fa-instagram fa-fw"></i> Album<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><?php if(isset($_SESSION['uname'])){?>
                                    <a href="addalbum.php">Add Album</a><?php }?>                                </li>
                                <li><?php if(isset($_SESSION['uname'])){?>
                                    <a href="viewallalbums.php">View Album</a><?php }?>                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
<li class="active">
                            <a href="#"><i class="fa fa-file-photo-o fa-fw"></i> Gallery<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><?php if(isset($_SESSION['uname'])){?>
                                    <a href="addgallery.php">Add Gallery</a><?php }?></li>
                                <li>
                                  <?php if(isset($_SESSION['uname'])){?>  
                                  <a class="active" href="viewsgallery.php">View Gallery</a><?php }?>                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
    <li>
                            <a href="#"><i class="fa fa-dollar"></i> Foreign Exchange<span class="fa arrow"></span></a>     
                                  <ul class="nav nav-second-level">
                                <li>
                                    <a href="insfor.php">Add Forex</a></li>
                                <li>
                                   <a href="disfored.php">View Forex</a>                                </li>
                            </ul>
                                               </li>
                        </li>
                        <li>
                            <!-- /.nav-second-level -->
                        </li>

                                    <li>
                            <a href="home.php"><i class="fa fa-dashboard fa-fw"></i>Interests<span class="fa arrow"></span></a>        
                             <ul class="nav nav-second-level">
                                <li>
                                    <a href="dpi.php">View/Edit  Deposit Interest</a></li>
                                <li>
                                   <a href="lni.php">View/Edit Loan Interest</a>                                </li>
                            </ul>                </li>
                        </li>
                        <li>
                            <a href="home.php"><i class="fa fa-file-pdf-o"></i> Event & Notice<span class="fa arrow"></span></a>
       <ul class="nav nav-second-level">
 <li>
                                    <a href="fileupl.php">Add Event</a></li>
                                <li>
                                   <a href="disevent.php">View Event</a>             
                                                      </li>
                            </ul>                
                                              </li>
                        </li>

                           <li>
                            <a href="home.php"><i class="fa fa-camera"></i> Slider<span class="fa arrow"></span></a>
       <ul class="nav nav-second-level">
 <li>
                                    <a href="addsl.php">Add Slider </a></li>
                                <li>
                                   <a href="viewslider.php">View Slider</a>                                </li>
                            </ul>                
                                              </li>
                        </li>
                                               <li>
                            <a href="home.php"><i class="fa fa-calendar"></i> Notice Slider<span class="fa arrow"></span></a>
       <ul class="nav nav-second-level">
 <li>
                                    <a href="upno.php">Update Notice </a></li>
                               
                            </ul>                
                                              </li>
                        </li>
                        <li>
                            <a href="home.php"><i class="fa  fa-group"></i>Board Members<span class="fa arrow"></span></a>        
                             <ul class="nav nav-second-level">
                                <li>
                                    <a href="addmem.php">Add Member</a></li>
                                <li>
                                   <a href="viewmem.php">View Members</a>                                </li>
                            </ul>                </li>
                        </li>
                        </ul>
                        
</div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
