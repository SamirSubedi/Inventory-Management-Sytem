<?php
include 'connect.php';
$SN=$_POST['n1'];
$details=$_POST['n2'];

if($SN=="")
{
	die("Currency blank ,,,Sorry");
}

$qq="Update linterest set PRate='$details' where Lname='$SN'";
mysqli_query($con,$qq);

echo "<script>location.href='lni.php'</script>";
?>
