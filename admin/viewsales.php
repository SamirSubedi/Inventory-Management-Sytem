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
                   
 <h1 class="page-header">VIEW PRODUCT SALES</h1>
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
                                
                                    <th> Product Name</th>
                                      <th>Party</th>
                                      
                                          <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Payment</th>
                                            <th>Area</th>
                                            <th>Date</th>
                                <td>Sales Man</td>
                                  
                                         
                                      <th>Delete</th>                             
                                </tr>

                            </thead>
                            <tbody>

                   <?php     
include 'connect.php';
$quer="Select * from sales order by date desc";
$result=mysqli_query($con,$quer);


    while($row = $result->fetch_assoc()) {


        echo '<tr>
               

 <b><td scope="row">' . $row["Pname"]. '</td><b>
  <td scope="row">' . $row["Party"]. '</td>
   <td scope="row">' . $row["quantity"]. '</td>
 <td scope="row">' . $row["price"]. '</td>
  <td scope="row">' . $row["pmt"]. '</td>
      <td scope="row">' . $row["area"]. '</td>    
      <td scope="row">' . $row["date"]. '</td>        
              <td scope="row">' . $row["sman"]. '</td>

                 <td> <a href="deltm.php?id='.$row["sid"].'&Name='.$row["Pname"].'">Delete</a></td>

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

