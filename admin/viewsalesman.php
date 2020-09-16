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
                   
 <h1 class="page-header">VIEW SALESMAN</h1>
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
                                <tr bgcolor="lightblue">
                                
                                    <th> Name</th>
                                      <th>Phone</th>
                                      
                                          <th>Date</th>
                                            <th>Address</th>
                                            
                                <td>Image</td>
                                  
                                         
                                      <th>Delete</th>                             
                                </tr>

                            </thead>
                            <tbody>

                   <?php     
include 'connect.php';
$quer="Select * from salesman ";
$result=mysqli_query($con,$quer);


    while($row = $result->fetch_assoc()) {
$na=$row['sname'];
$nm=$row['slast'];
$name=$na.$nm;
        echo '<tr>
               

 <b><td scope="row">' . $name. '</td><b>
  <td scope="row">' . $row["sphone"]. '</td>
   <td scope="row">' . $row["sdate"]. '</td>
 <td scope="row">' . $row["saddress"]. '</td>
     
              <td><img src="product/'.$row["image"].'"width="80px" height="80px"></td>


                 <td> <a href="deltm.php?id='.$row["sid"].'&Name='.$row["sname"].'">Delete</a></td>

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

