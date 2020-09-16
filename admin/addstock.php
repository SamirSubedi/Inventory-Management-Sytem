<?php session_start();
if(isset($_SESSION['uname']))
{

include 'connect.php';
 include "header1.php"; 

include "menu/mmenu1.php"; ?>
<div id="page-wrapper">
            <div class="row"
                <div class="col-lg-12">
                   <center> <h1 class="page-header">ADD PRODUCT </h1></center>
                </div>
                 <?php if (isset($msg)) {
                     echo $msg;
                    } ?>
                        <form action="addstockback.php"  enctype="multipart/form-data" name="Upload" method="post" ><br>
                           
         <u><center>Check the spelling before you proceed</center></u>

 <br> <br>
      
                            
  <div class="form-group">
                               <label class="" for="text">Product Name</label>
                                 <input type="text" class="form-control"  name="n1" required>
                           </div>
                             <div class="form-group">
                               <label class="" for="text">Product Description</label>
                                 <input type="text" class="form-control" required="" name="n2" required>
                           </div>


                              

                          
                          <center> <input type="submit" name="btnSave" class="btn btn-success"><i class="fa fa-save"></i></center>

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
<script>
  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
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

