<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<?php
include 'connect.php';
 include "header1.php"; 
include "menu/aslide2.php"; ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Slider </h1>
                </div>
                <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th> Image1</th>
       
        <th>Delete</th>
       
      </tr>
    </thead>
    <tbody>
   <?php 	 
include 'connect.php';
$quer="Select * from slider";
$result=mysqli_query($con,$quer);


    while($row = $result->fetch_assoc()) {


        echo '<tr>
                  <td scope="row">' . $row["Name"]. '</td>
                    
                  <td><img src="slider/'.$row["Image1"].'"width="100px" height="100px"></td>
             

                 <td> <a href="delsll.php?id='.$row["SN"].'&Name='.$row["Name"].'">Delete</a></td>

                </tr>';

}

?>
                
             </tbody>
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

