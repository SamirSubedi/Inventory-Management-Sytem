<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<?php
include 'connect.php';
 include "header1.php"; 
include "menu/fmenu2.php"; ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Currency</h1>
                </div>
                <table class="table table-striped">
    <thead>
      <tr>
        <th>Currency</th>
        <th>Unit</th>
        <th>Buying/Rs</th>
        <th>Selling/Rs</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
   <?php 	 
include 'connect.php';
$quer="Select * from forex";
$result=mysqli_query($con,$quer);


    while($row = $result->fetch_assoc()) {


        echo '<tr>
                  <td scope="row">' . $row["Currency"]. '</td>
                   <td>' . $row["Unit"] .'</td>
                  <td>' . $row["Buying"] .'</td>
                  <td> '.$row["Selling"] .'</td>
                 
                 <td> <a href="editfo.php?id='.$row["SN"].'&Currency='.$row["Currency"].'">Edit</a></td>
                 <td><a href="delfor.php?id='.$row["SN"].'">Delete</a></td>
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

