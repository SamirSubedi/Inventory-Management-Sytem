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
                   
 <h1 class="page-header">VIEW PRODUCT PURCHASE</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">

                    <?php if (isset($_GET['msg'])) {
                       echo $_GET['msg'];
                    } ?>
                        <table class="table table-striped" id="blogtable">
                            <thead>
                                <tr bgcolor="lightblue">
                                  <th>Bill No:</th>
                                    <th> Product Name</th>
                                      <th>Supplier</th>
                                        <th>Date</th>
                                          <th>Quantity</th>
                                            <th>Price</th>
                                    <th>Image</th>
                                  
                                         
                                                                
                                </tr>

                            </thead>
                            <tbody>

                   <?php     
include 'connect.php';
$quer="Select * from purchase order by pdate desc";
$result=mysqli_query($con,$quer);


    while($row = $result->fetch_assoc()) {


        echo '<tr>
                  <td scope="row">' . $row["bno"]. '</td>

 <b><td scope="row">' . $row["pname"]. '</td><b>
  <td scope="row">' . $row["supplier"]. '</td>
   <td scope="row">' . $row["pdate"]. '</td>
 <td scope="row">' . $row["quantity"]. '</td>
  <td scope="row">' . $row["price"]. '</td>
                   <td><img src="product/'.$row["image"].'"width="80px" height="80px"></td>
              

                 

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

