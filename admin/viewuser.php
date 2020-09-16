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
                   
 <h1 class="page-header">USERS</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-8" align="right">

                    <?php if (isset($_GET['msg'])) {
                       echo $_GET['msg'];
                    } ?>
                        <table class="table table-striped" id="blogtable">
                            <thead>
                                <tr bgcolor="success">
                                  <th>SN</th>
                                    <th>UserName</th>
                                      
                                          <th>Permission</th>
                                        
                                       <th>Added On</th>
                                       <th>Delete</th>
                                  
                                         
                                                             
                                </tr>

                            </thead>
                            <tbody>

                   <?php 
                   $sn=1;    
include 'connect.php';
$quer="Select * from login ";
$result=mysqli_query($con,$quer);


    while($row = $result->fetch_assoc()) {


        echo '<tr>

                  <td scope="row">' . $sn. '</td>

 <b><td scope="row">' . $row["Username"]. '</td><b>
  
 <td scope="row">' . $row["permission"]. '</td>
 <td scope="row">' . $row["date"]. '</td>
  
 <td scope="row">'."Delete". '</td>               
              

                 

                </tr>';
$sn=$sn+1;
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

