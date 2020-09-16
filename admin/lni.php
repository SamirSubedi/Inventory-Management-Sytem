<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<?php
include 'connect.php';
 include "header1.php"; 
include "menu/dmenu1.php"; ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Loan Interest</h1>
                </div>
                <table class="table table-striped">
    <thead>
      <tr>
    <th>Types of Loan</th>
        <th>Premium (% p.a.)on Base Rate</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
   <?php 	 
include 'connect.php';
$quer="Select * from linterest";
$result=mysqli_query($con,$quer);


    while($row = $result->fetch_assoc()) {


        echo '<tr>
                 <td scope="row">' . $row["Lname"]. '</td>
                  <td>' . $row["PRate"] .'</td>
             
                 
                 <td> <a href="editlint.php?id='.$row["SN"].'&Lname='.$row["Lname"].'">Edit</a></td>
                 <td><a href="dellint.php?id='.$row["SN"].'">Delete</a></td>
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

