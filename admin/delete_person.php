<?php 
@session_start();
if (!isset($_SESSION['uname'])) {
  header('location:login.php');

  }

$id = $_GET['id'];

require_once "class/admin.class.php";
$admin = new Admin();
$admin->id = $id;
$msg = $admin->deleteAdmin();

header("location:viewmem.php?msg=$msg");
?>