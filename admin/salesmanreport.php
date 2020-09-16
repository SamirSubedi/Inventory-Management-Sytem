<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<?php
include 'connect.php';
 include "header1.php"; 
include "menu/mmenu1.php"; 
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   
 <h2 class="page-header">GENERATE SALESMAN  REPORT</h2>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <form action="display.php"  enctype="multipart/form-data" name="Upload" method="post" >
                   
                     <div class="col-sm-3"> <div class="form-group">
  <label for="sel1">Salesman:</label>
  <select class="form-control" name="n7">
    <?php
    include 'connect.php';
     $query="Select sname from salesman";
 $res=mysqli_query($con,$query);
     while($row = mysqli_fetch_array($res)){
   echo  "<option>".
      
  
      
     $row['sname'].
      
    "</option>";}?>
      
    </select></div></div>

  <div class="col-sm-3">From <label for="sel1">Starting date:</label> <input type="date" name="d1"></div>
  <div class="col-sm-3">To <label for="sel2">Ending Date</label><br><input type="date" name="d2"></div>
  
  <br></div>
<br>
<input type="submit"  name="btnSave" class="btn btn-success" value="GENERATE"></form>
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

