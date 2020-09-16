<?php
include 'connect.php';
$SN=$_POST['n1'];
$details=$_POST['n2'];
$bu=$_POST['n3'];
$se=$_POST['n4'];
if($SN=="")
{
	die("Currency blank ,,,Sorry");
}

$qq="Update dinterest set Rate='$details',Minbalance='$bu',Intpayable='$se' where Dname='$SN'";
mysqli_query($con,$qq);

echo "<script>location.href='dpi.php'</script>";
?>
