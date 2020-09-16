<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<?php
include 'connect.php';
 include "header1.php"; 
include "menu/mmenu2.php"; 
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   
 <h1 class="page-header">List Vacancies</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">

                    <?php if (isset($_GET['msg'])) {
                       echo $_GET['msg'];
                    } ?>
                        <table class="table table-bordered" id="blogtable">
                            <thead>
                                <tr>
                                  
                                    <th>Position</th>
                                    <th>Image</th>
                                    <th>Intro</th>
                                    <th>Number</th>  
                                
                                      <th>Edit</th>  
                                      <th>Delete</th>                             
                                </tr>

                            </thead>
                            <tbody>

                   <?php     
include 'connect.php';
$quer="Select * from vacancy";
$result=mysqli_query($con,$quer);


    while($row = $result->fetch_assoc()) {


        echo '<tr>
                  <td scope="row">' . $row["position"]. '</td>



                   <td><img src="file/'.$row["image"].'"width="100px" height="100px"></td>
              <td scope="row">'.$row["intro"]. '</td>
               <td scope="row">'. $row["number"]. '</td>
 <td> <a href="editvacan.php?id='.$row["id"].'">Edit</a></td>
                 <td> <a href="delvacan.php?id='.$row["id"].'">Delete</a></td>

                </tr>';

}

?>
                
                                
                            </tbody>
                            
                        </table>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
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

