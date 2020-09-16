<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<?php
include 'connect.php';
 include "header1.php"; 
include "menu/emenu2.php"; ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Event/Notices</h1>
                </div>
                <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Details</th>
      
        <th>Date</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
   <?php 	 
include 'connect.php';
$quer="Select * from event";
$result=mysqli_query($con,$quer);

$allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg",
        "gif"
    ); 
    while($row = $result->fetch_assoc()) {


        echo '<tr>
                  <td scope="row">' . $row["Name"]. '</td>
                   <td>' . $row["Details"] .'</td>          
                  ';



                  echo'<td>'.$row["Date"] .'</td>

                 <td><a href="deleven.php?id='.$row["SN"].'">Delete</a></td>
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

