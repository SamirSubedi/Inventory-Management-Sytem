<?php
session_start();?>


<?php include "header1.php"; ?>
<?php include "menu/gmenu.php"; ?>
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
                    <h1 class="page-header">Add Loan Interest</h1>
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill This Form To Add Loan Interest
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="updlonint.php" method="post" enctype="multipart/form-data" name="upload">
                                       
                                        <div class="form-group">
                                           <label for="usr">Loan Name</label>
     <?php
include 'connect.php';


      echo'<input type="text" class="form-control" value="'.$_GET["Lname"].'" name="n1">'
      ?>
    </div>
                     <div class="form-group">
      <label for="unit">Premium (% p.a. ) on Base Rate:</label>
      <input type="text" class="form-control" name="n2" required="" min="0" >

    </div>     
              
              <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-10">
  <button type="submit" class="btn btn-primary" name="submit">Save</button>
      </div>           


                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            
               

