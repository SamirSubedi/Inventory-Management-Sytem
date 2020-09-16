    <?php session_start();
if(isset($_SESSION['uname']))
{
  ?>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>sGALLERY</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  </head>
  <body>




    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Deposit Interest</h1>
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill This Form To Add Deposit Interest
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="frminsdepointva.php" method="post" enctype="multipart/form-data" name="upload">
                                       
                                        <div class="form-group">
                                           <label for="usr">Deposit Account Type</label>
      <input type="text" class="form-control" name="n1" required>
    </div>
                     <div class="form-group">
      <label for="unit">Rate:</label>
      <input type="text" class="form-control" name="n2" required="" >

    </div>     
                         <div class="form-group">
      <label for="unit">Minimum Balance</label>
      <input type="number" class="form-control" name="n3" required >
      
    </div>                     
                     <div class="form-group">
      <label for="unit">Interest Payable</label>
      <input type="text" class="form-control" name="n4" required>
      
    </div>  
<div class="form-group">        
      <div class="col-sm-offset-4 col-sm-10">
  <button type="submit" class="btn btn-primary" name="submit">Save</button>
      </div>



                </div>
                
                <!-- /.col-lg-12 -->
            </div>
   <?php         
  }
          else
{
header("location:login.php");
}
       
?>
