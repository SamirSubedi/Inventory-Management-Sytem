<?php
session_start();?>


<?php include "header1.php"; ?>
<?php include "menu/gmenu.php"; ?>

  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Information</h1>
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill This Form To Edit Deposit Information
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="upddepint.php" method="post" enctype="multipart/form-data" name="upload">
                                       
                                        <div class="form-group">
                                           <label for="usr">Deposit Account Type</label>
 <?php
include 'connect.php';


      echo'<input type="text" class="form-control" value="'.$_GET["Dname"].'" name="n1">'
      ?>
    </div>
                     <div class="form-group">
      <label for="unit">Rate:</label>
      <input type="text" class="form-control" name="n2" required="" min="0">

    </div>     
                         <div class="form-group">
      <label for="unit">Minimum Balance</label>
      <input type="number" class="form-control" name="n3" required min="0" >
      
    </div>                     
                     <div class="form-group">
      <label for="unit">Interest Payable</label>
      <input type="text" class="form-control" name="n4" required >
      
    </div>  
<div class="form-group">        
      <div class="col-sm-offset-4 col-sm-10">
  <button type="submit" class="btn btn-primary" name="submit">Save</button>
      </div>



                </div>
                
                <!-- /.col-lg-12 -->
            </div>