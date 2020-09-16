<?php 
@session_start();
if (!isset($_SESSION['admin_username'],$_SESSION['admin_name'])) {
  header('location:index.php');

  }

 
$title = "Edit Person";
require_once("class/admin.class.php");
$admin= new Admin();
$admin->id=$_GET['id'];
 $adminlist= $admin->selectAdminById();
if (isset($_POST['btnSave'])) {
  $admin->name =$admin->checkInputValue($_POST['name']);
  $admin->post = $admin->checkInputValue($_POST['post']);
  if ($_FILES['photo']['error'] == 0) {
    $imgname = uniqid() .  '_' . $_FILES['photo']['name'];
    if (move_uploaded_file($_FILES['photo']['tmp_name'], 'images/' . $imgname)) {
         $admin->photo = $imgname;
    }
  }
  $admin->contact = $admin->checkInputValue($_POST['contact']);
  $msg = $admin->updateAdmin();
}
   

require_once "header.php"; ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit Persons</h1>
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
                           <?php foreach ($adminlist as $al) { ?>
                             
                           <div class="form-group">
                               <label class="" for="title">Name</label>
                               <input type="text" class="form-control" required="" name="name" value="<?php echo $al->name; ?>">
                           </div>
                           <div class="form-group">
                               <label class="" for="title">Post</label>
                               <input type="post" class="form-control" required="" name="post" value="<?php echo $al->post; ?>">
                           </div>                            
                           <div class="form-group">
                               <label class="" for="contact">Contact</label>
                                 <input type="text" class="form-control" required="" name="contact" value="<?php echo $al->contact; ?>">
                           </div>
                            

                           <div class="form-group">
                               <label class="" for="photo">Photo</label>
                               <input type="file" class="form-control"  name="photo" required="">

                           </div>
                           <?php } ?>

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