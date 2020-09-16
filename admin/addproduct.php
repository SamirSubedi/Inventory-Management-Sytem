<?php session_start();
if(isset($_SESSION['uname']))
{

include 'connect.php';
 include "header1.php"; 

include "menu/mmenu1.php"; ?>
<div id="page-wrapper">
            <div class="row"
                <div class="col-lg-12">
                   <center> <h1 class="page-header">PURCHASE INVOICE</h1></center>
                </div>
                 <?php if (isset($msg)) {
                     echo $msg;
                    } ?>
                        <form action="addproductback.php"  enctype="multipart/form-data" name="Upload" method="post" ><br>
                           <CENTER><img id="blah" src="#" width="190px" height="150px"></img><br> <div class="form-group">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  <label for="unit">Upload Your Image Here:</label>
          <input type="file"  onchange="readURL(this);"  name="file" required ></CENTER>
          <br>
          <br>
                           <div class="form-group">
                               <label class="" for="title"> Bill no:</label>
                               <input type="text" class="form-control" required="" name="n1" required>
                           </div>
                            <div class="form-group">
  <label for="sel1">Product Name:</label>
  <select class="form-control" name="n2">
    <?php
     $query="Select pname from product";
 $res=mysqli_query($con,$query);
     while($row = mysqli_fetch_array($res)){
   echo  "<option>".
      
  
      
     $row['pname'].
      
    "</option>";}?>
      
    </select></div>                            
                          
                       
         <div class="form-group">
                               <label class="" for="text">Product Detail</label>
                                 <input type="text" class="form-control" required="" name="n4" required>
                           </div>
                            
  <div class="form-group">
                               <label class="" for="text">Product Quantity</label>
                                 <input type="text" class="form-control" required="" name="n5" required>
                           </div>
                             <div class="form-group">
                               <label class="" for="text">Product Price</label>
                                 <input type="number" class="form-control" required="" name="n6" required>
                           </div>

                            <div class="form-group">
                               <label class="" for="text">Purchase Date</label>
                                 <input type="Date" class="form-control" required="" name="n3" required>
                           </div>

                          
   <div class="form-group">
  <label for="sel1">Select Supplier:</label>
  <select class="form-control" name="n7">
    <?php
     $query="Select sname from supplier";
 $res=mysqli_query($con,$query);
     while($row = mysqli_fetch_array($res)){
   echo  "<option>".
      
  
      
     $row['sname'].
      
    "</option>";}?>
      
    </select></div>
    
<br><br>
                                                 

                          
                          <center> <input type="submit" name="btnSave" onclick="return confirm('Are you sure you want to continue?');" class="btn btn-success"><i class="fa fa-save"></i></center>

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

