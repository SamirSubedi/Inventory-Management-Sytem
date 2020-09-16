<?php
session_start();?>


<?php include "header1.php"; ?>
<?php include "menu/gmenu.php"; ?>

  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Currency</h1>
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill This Form To Add Currency 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="upd.php" method="post" enctype="multipart/form-data" name="upload">
                                       
                                        <div class="form-group">
                                           <label for="usr">Currency:</label>
                                           <?php
include 'connect.php';


      echo'<input type="text" class="form-control" value="'.$_GET["Currency"].'" name="n1" required>'
      ?>
    </div>
                     <div class="form-group">
      <label for="unit">Unit:</label>
      <input type="number" class="form-control" name="n2" required>

    </div>                              <div class="form-group">
      <label for="unit">Buying:</label>
      <input type="number" class="form-control" name="n3"  step=”any” required>
      
    </div>                     
                     <div class="form-group">
      <label for="unit">Selling:</label>
      <input type="number" class="form-control" name="n4" step=”any” required>
      
    </div>  
<div class="form-group">        
      <div class="col-sm-offset-4 col-sm-10">
  <button type="submit" class="btn btn-primary" name="submit">Save</button>
      </div>



                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            
               
