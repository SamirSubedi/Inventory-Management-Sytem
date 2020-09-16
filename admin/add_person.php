<?php 
@session_start();
if (!isset($_SESSION['uname'])) {
  header('location:login.php');

  }
$title= "Add Persons";
if (isset($_POST['btnSave'])) {
  //calling class
  require_once "class/admin.class.php";
  //creating objects
  $admin = new Admin();
  $admin->name =$admin->checkInputValue($_POST['name']);
  $admin->post = $admin->checkInputValue($_POST['post']);
   //uploading image
  $target="images/".basename($_FILES['image']['name']);
  $image=$_FILES['image']['name'];
 $tmp_name = $_FILES['image']['tmp_name'];
  
    if (move_uploaded_file($tmp_name,$target)) {
         $admin->photo = $imgname;
    }
  }
  $admin->contact = $admin->checkInputValue($_POST['contact']);
  $msg = $admin->save();
}

require_once "header.php"; ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Persons</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                   <div class="row">
                    <div class="col-lg-6">
                    <?php if (isset($msg)) {
                     echo $msg;
                    } ?>
                        <form action="" method="post" id="categoryform" enctype="multipart/form-data">
                           
                           <div class="form-group">
                               <label class="" for="title">Name</label>
                               <input type="text" class="form-control" required="" name="name">
                           </div>
                           <div class="form-group">
                               <label class="" for="title">Post</label>
                               <input type="post" class="form-control" required="" name="post">
                           </div>                            
                          
                           <div class="form-group">
                               <label class="" for="contact">Contact</label>
                                 <input type="text" class="form-control" required="" name="contact">
                           </div>
                            

                           <div class="form-group">
                               <label class="" for="photo">Photo</label>
                               <input type="file" class="form-control"  name="photo">

                           </div>
                           <button type="submit" name="btnSave" class="btn btn-success"><i class="fa fa-save"></i>  Save Person</button>

                        </form>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    <?php require_once "footer.php"; ?>
    <script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>