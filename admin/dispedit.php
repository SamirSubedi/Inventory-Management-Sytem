<?php session_start();
if(isset($_SESSION['uname']))
{

include 'connect.php';
 include "header1.php"; 
include "menu/mmenu1.php"; ?>
<div id="page-wrapper">
            <div class="row"
                <div class="col-lg-12">
                    <h1 class="page-header">Add Vacancy</h1>
                </div>
                 <?php if (isset($msg)) {
                     echo $msg;
                    } ?>
                        <form action="updvacancyback.php"  enctype="multipart/form-data" name="Upload" method="post" >
                           
                           <div class="form-group">
                               <label class="" for="title">Category</label>
                               <input type="text" class="form-control" required="" name="n1" required>
                           </div>
                           <div class="form-group">
                               <label class="" for="title">Intro </label>
                               <input type="text" class="form-control" required="" name="n2" required>
                           </div>                            
                          
                           <div class="form-group">
                               <label class="" for="text">Description</label>
                                 <input type="text" class="form-control" required="" name="n3" required>
                           </div>
                            
         <div class="form-group">
                               <label class="" for="text">Opening Seats</label>
                                 <input type="number" class="form-control" required="" name="n4" required>
                           </div>
                            
                         
<img id="blah" src="#" width="190px" height="150px"></img><br> <div class="form-group">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  <label for="unit">Upload Your Image Here:</label>
          <input type="file"  onchange="readURL(this);"  name="file" required >


                        
                          
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
<script >
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

