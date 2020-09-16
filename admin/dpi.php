<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<?php
include 'connect.php';
 include "header1.php"; 
include "menu/dmenu.php"; ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Deposit Interest</h1>
                </div>
                <table class="table table-striped">
    <thead>
      <tr>
        <th>Deposit Account Type</th>
        <th>Rate per annum(%)</th>
        <th>Minimum Balance(Rs)</th>
        <th>Interest Payment</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
   <?php 	 
include 'connect.php';
$quer="Select * from dinterest";
$result=mysqli_query($con,$quer);


    while($row = $result->fetch_assoc()) {


        echo '<tr>
                 <td scope="row">' . $row["Dname"]. '</td>
                  <td>' . $row["Rate"] .'</td>
                  <td> '.$row["Minbalance"] .'</td>
                        <td> '.$row["Intpayable"] .'</td>
                 
                 <td> <a href="editdint.php?id='.$row["SN"].'&Dname='.$row["Dname"].'">Edit</a></td>
                 <td><a href="delint.php?id='.$row["SN"].'">Delete</a></td>
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

