<?php
session_start();

include 'connect.php';

$id=$_GET['id'];
$query="Delete from dinterest where SN=$id";
$res=mysqli_query($con,$query);
if(!$res){
die("Cannot delete data bro".mysqli_error());
}

echo "<script>location.href='dpi.php'</script>"
?>
