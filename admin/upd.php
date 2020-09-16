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

$qq="Update forex set Unit='$details',Buying='$bu',Selling='$se' where Currency='$SN'";
mysqli_query($con,$qq);

echo "<script>location.href='disfored.php'</script>"
?>
