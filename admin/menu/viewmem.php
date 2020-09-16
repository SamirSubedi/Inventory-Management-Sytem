<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<?php
include 'connect.php';
 include "header1.php"; 
include "menu/fmenu2.php"; ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   
 <h1 class="page-header">List Persons</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">

                    <?php if (isset($_GET['msg'])) {
                       echo $_GET['msg'];
                    } ?>
                        <table class="table table-bordered" id="blogtable">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Post</th>
                                    <th>Contact</th>                                    
                                </tr>

                            </thead>
                            <tbody>

                            <?php $i = 1; foreach($adminlist as $al){ ?>
                                 <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $al->name; ?></td>
                                    <td>

                                    <?php 

                                    if (!empty($al->photo) && file_exists('images/' . $al->photo )) { ?>
                                       <img src="images/<?php echo $al->photo ?>" width="100" alt="<?php echo $al->name; ?>">
                                   <?php  } else {
                                    echo "Not Available";
                                   }?></td>
                                   <td><?php echo $al->post; ?></td>
                                   <td><?php echo $al->contact; ?></td>
                                    <td><a href="edit_person.php?id=<?php echo $al->id ?>"class="btn btn-info"> <i class="fa fa-pencil"></i>  Edit</a>&nbsp;&nbsp;<a href="delete_person.php?id=<?php echo $al->id ?>"class="btn btn-danger" onclick="return confirm('Are you sure to delete')"> <i class="fa fa-trash"></i>  Delete</a></td>
                                </tr>


                            <?php } ?>
                               
                                
                            </tbody>
                            
                        </table>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>

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

