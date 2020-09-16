<?php
include 'connect.php';
$details=$_POST['n1'];


$qq="Update noticeslider set noticeslider='$details' where id='1'";
mysqli_query($con,$qq);

echo "<script>location.href='upno.php'</script>"
?>
