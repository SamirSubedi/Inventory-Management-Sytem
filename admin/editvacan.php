<?php session_start();
if(isset($_SESSION['uname']))
{
$id=$_GET['id'];
include 'connect.php';
 include "header1.php"; 
include "menu/mmenu1.php"; ?>
<div id="page-wrapper">
            <div class="row"
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Vacancy</h1>
                </div>
                 <?php if (isset($msg)) {
                     echo $msg;
                    } ?>
                        <form  action ="updatevacan.php" enctype="multipart/form-data" name="Upload" method="post" >
                           
                           <div class="form-group">

                           <?php
                            $quer="Select * from vacancy where id='$id'";
$result=mysqli_query($con,$quer);


    while($row = $result->fetch_assoc()) {
      $id=$row['id'];
$cat=$row['position'];
$intro=$row['intro'];
$des=$row['description'];
$no=$row['number'];
   



    }?>

                               <label class="" for="title">Category</label>
                               <input type="text" class="form-control" required="" value="<?php echo $cat;?>" readonly name="n1" required>
                           </div>
                           <div class="form-group">
                               <label class="" for="title">Intro </label>
                               <input type="text" class="form-control" required="" value="<?php echo $intro;?>"  name="n2" required>
                           </div>                            
                          
                           <div class="form-group">
                               <label class="" for="text">Description</label>
                                 <input type="text" class="form-control" value="<?php echo $des;?>"   name="n3" required>
                           </div>
                            
         <div class="form-group">
                               <label class="" for="text">Opening Seats</label>
                                 <input type="number" class="form-control" value="<?php echo $number;?>"   name="n4" required>
                           </div>
                            
                         

                 <?php
                            $quer="Select * from vacancy where id='$id'";
$result=mysqli_query($con,$quer);


    while($row = $result->fetch_assoc()) {

    echo '<td><img align ="center"src="file/'.$row["image"].'"width="100px" height="100px"></td> <br>
    <br>';



    }?>

                        
                          
                          <a href="updatevacan.php?id='.$row["id"].'"><input type="submit" name="btnSave" class="btn btn-success"></a>

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

