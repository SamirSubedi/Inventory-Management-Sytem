<?php
session_start();
if(isset($_SESSION['uname']))
{
  ?>


<?php
include 'connect.php'; 
include "header1.php"; ?>
<?php  include "menu/nmenu.php";  ?>

  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Slider</h1>
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill This Form To Update Notice Slider
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="upnot.php" method="post" enctype="multipart/form-data" name="upload">
                                       
                                        <div class="form-group">
                                           <label for="usr">Notice:</label>
                                           <?php
                                            $sql = "select * from noticeslider where id=1";
  $con = mysqli_connect("localhost","root","","bhanu");
  $result=mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)){
     echo '<textarea  class="form-control" rows="5" cols="70" name="n1" required>'.$row["noticeslider"]. '</textarea>';
        
}

     ?>
    </div>
                    
<div class="form-group">        
      <div class="col-sm-offset-4 col-sm-10">
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
      </div>



                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            
               
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