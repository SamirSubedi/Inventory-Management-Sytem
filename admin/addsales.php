<?php session_start();
if(isset($_SESSION['uname']))
{


 include "header1.php"; 

include "menu/mmenu1.php"; ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <center> <h1 class="page-header">SALES INVOICE</h1></center>
                </div>
                 <?php if (isset($msg)) {
                     echo $msg;
                    } ?>
                        <form action="addsaleback.php"  enctype="multipart/form-data" name="submit" method="post" ><br>
                           
          <br>

         <div class="form-group">
  <label for="sel1">Invoice No:</label>
  <?php include 'connect.php';
  $xyz=1000;
$query="SELECT invno FROM sales 
ORDER BY sid DESC LIMIT 1 ";
 $res=mysqli_query($con,$query);
  
     while($row = mysqli_fetch_array($res)){
      $xyz=$row['invno'];
      $xyz++;
    ?>


 <input type='text' name='n85' required  readonly value="<?php echo $xyz;}?>">
</div>

    <?php
    $pna=array( );
      include 'connect.php';?>
      <div class="form-group"><div class="form-group row">
       <h2 align="center"> Product </h2><br>
<?php 

     $query="Select * from product ";
 $res=mysqli_query($con,$query);
  
     while($row = mysqli_fetch_array($res))
     {?>
     <div class='col-sm-4'>
       
   
   <input type="checkbox" class="form-control" value=" <?php echo $row['pname']; ?>" name="<?php echo $row['pname'];?>" ><b><?php echo $row['pname'];?></b>
     </div> 
 <div class='col-sm-4'>;
    <label class='' for='txt' >Product Quantity</label>
                                 <input type='number' name="<?php echo $row['pid'];?>" class='form-control'  >
</div>
 <div class="col-sm-4">
                               <label class="" for="text">SALES PRICE</label>
                               <input type='number' name="<?php echo $row['pdes'];?>" class='form-control'  >
                           </div>
                           <?php }?>


     <div>     
          <div></div>
     
     <br><br>
<div class="form-group">
  <label for="sel1">Select Party:</label>
  <input type="text" name="n8"required class="form-control" >
</div>
<div class="form-group">
  <label for="sel1">Vat/Pan No:</label>
  <input type="text" name="n33"required class="form-control" >
</div>
<div class="form-group">
  <label for="sel1">Discount(%)</label>
  <select name="n28" class="form-control">
    <option  value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
     <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>

</div>
                            <div class="form-group">
                               <label class="" for="text">Sales Date</label>
                                 <input type="Date" class="form-control" required="" name="n3" required>
                           </div>
Payment:
                          <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" value="Cash"name="optradio">CASH
  </label>

</div>
  <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" value="Cheque"name="optradio">CHEQUE
  </label>
  
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" value="Credit" name="optradio">CREDIT
  </label>
</div>
                            <div class="form-group">
                               <label class="" for="text">Sales Area</label>
                                 <input type="text  " class="form-control" required="" name="n9" required>
                           </div>

   <div class="form-group">
  <label for="sel1">Salesman:</label>
  <select class="form-control" name="n7">
    <?php
     $query="Select sname from salesman";
 $res=mysqli_query($con,$query);
     while($row = mysqli_fetch_array($res)){
   echo  "<option>".
      
  
      
     $row['sname'].
      
    "</option>";}?>
      
    </select></div>
    
<br><br>
                                                 

                          
                          <center> <input type="submit" name="btnSave" onclick="return confirm('Are you sure you want to continue?');" class="btn btn-success"><i class="fa fa-save"></i></center>

                        </form>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
            </div>
</table>
<script>
  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
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

