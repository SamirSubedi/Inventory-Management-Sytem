<?php
session_start();?>


<?php
include 'connect.php'; 
include "header1.php"; ?>
<?php  include "menu/fmenu1.php";  ?>

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
                                    <form action="ins.php" method="post" enctype="multipart/form-data" name="upload">
                                       
                                        <div class="form-group">
                                           <label for="usr">Currency:</label>
      <input type="text" class="form-control" name="n1" required>
    </div>
                     <div class="form-group">
      <label for="unit">Unit:</label>
      <input type="number" class="form-control" name="n2" required min="0" >

    </div>     
                         <div class="form-group">
      <label for="unit">Buying:</label>
      <input type="text" class="form-control" name="n3" required >
      
    </div>                     
                     <div class="form-group">
      <label for="unit">Selling:</label>
      <input type="text" class="form-control" name="n4" required>
      
    </div>  

<div class="form-group">        
      <div class="col-sm-offset-4 col-sm-10">
  <button type="submit" class="btn btn-primary" name="submit">Save</button>
      </div>



                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            
               
  <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>