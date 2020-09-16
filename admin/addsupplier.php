<?php session_start();
if(isset($_SESSION['uname']))
{

include 'connect.php';
 include "header1.php"; 
include "menu/mmenu1.php"; ?>
<div id="page-wrapper">
            <div class="row"
                <div class="col-lg-12">
                    <h1 class="page-header">Add Supplier</h1>
                </div>
                 <?php if (isset($msg)) {
                     echo $msg;
                    } ?>
                        <form action="addsupplierback.php"  name="Upload" method="post" >
                           
                           <div class="form-group">
                               <label class="" for="title">Name</label>
                               <input type="text" class="form-control" required="" name="n1" required>
                           </div>
                           <div class="form-group">
                               <label class="" for="title">Email</label>
                               <input type="Email" class="form-control" required="" name="n2" required>
                           </div>                            
                          
                           <div class="form-group">
                               <label class="" for="text">Phone</label>
                                 <input type="number" class="form-control" required="" name="n3" required>
                           </div>
                            
         <div class="form-group">
                               <label class="" for="text">Address</label>
                                 <input type="text" class="form-control" required="" name="n4" required>
                           </div>
                            


                        
                          
                           <input type="submit" name="btnSave" onclick="return confirm('Are you sure you want to continue?');" class="btn btn-success"><i class="fa fa-save"></i>

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

