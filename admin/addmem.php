<?php session_start();
if(isset($_SESSION['uname']))
{

include 'connect.php';
 include "header1.php"; 
include "menu/mmenu1.php"; ?>
<div id="page-wrapper">
            <div class="row"
                <div class="col-lg-12">
                    <h1 class="page-header">Add Member</h1>
                </div>
                 <?php if (isset($msg)) {
                     echo $msg;
                    } ?>
                        <form action="memadd.php" method="post" id="categoryform" enctype="multipart/form-data">
                           
                           <div class="form-group">
                               <label class="" for="title">Name</label>
                               <input type="text" class="form-control" required="" name="n1" required>
                           </div>
                           <div class="form-group">
                               <label class="" for="title">Post</label>
                               <input type="post" class="form-control" required="" name="post" required>
                           </div>                            
                          
                           <div class="form-group">
                               <label class="" for="contact">Email</label>
                                 <input type="Email" class="form-control" required="" name="contact" required>
                           </div>
                            

                           <div class="form-group">
                               <label class="" for="photo">Photo</label>
                               <input type="file" class="form-control"  name="fileToUpload" required>

                           </div>
                           <input type="submit" name="btnSave" class="btn btn-success"><i class="fa fa-save"></i>

                        </form>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
            </div>
</table>

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

