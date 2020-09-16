<?php session_start();
if(isset($_SESSION['uname']))
{

include 'connect.php';
 include "header1.php"; 

include "menu/mmenu1.php"; ?>
<div id="page-wrapper">
            <div class="row"
                <div class="col-lg-12">
                   <center> <h1 class="page-header">SALESMAN DETAIL</h1></center>
                </div>
                 <?php if (isset($msg)) {
                     echo $msg;
                    } ?>
                        <form action="addsalesmanback.php"  enctype="multipart/form-data" name="Upload" method="post" ><br>
                           <CENTER><img id="blah" src="#" width="190px" height="150px"></img><br> <div class="form-group">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  <label for="unit">Upload Your Image Here:</label>
          <input type="file"  onchange="readURL(this);"  name="file" required ></CENTER>
          <br>
          <br>
                           <div class="form-group">
                               <label class="" for="title"> First Name</label>
                               <input type="text" class="form-control" required="" name="n1" required>
                           </div>
                            
                          
                       
         <div class="form-group">
                               <label class="" for="text">Last Name</label>
                                 <input type="text" class="form-control" required="" name="n2" required>
                           </div>
                            
  <div class="form-group">
                               <label class="" for="text">Phone</label>
                                 <input type="number" class="form-control" required="" name="n3" required>
                           </div>
                             <div class="form-group">
                               <label class="" for="text">Date Joined</label>
                                 <input type="date" class="form-control" required="" name="n4" required>
                           </div>

                            <div class="form-group">
                               <label class="" for="text">Address</label>
                                 <input type="text" class="form-control" required="" name="n5" required>
                           </div>

                          
  
    
<br>
                                                 

                          
                          <center> <input type="submit" name="btnSave"  onclick="return confirm('Are you sure you want to continue?');" class="btn btn-success"><i class="fa fa-save"></i></center>

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

