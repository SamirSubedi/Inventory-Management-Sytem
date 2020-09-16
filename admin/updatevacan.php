<?php
include 'connect.php';
$SN=$_POST['n1'];
$intro=$_POST['n2'];
$des=$_POST['n3'];
$number=$_POST['n4'];
$dt2=date("Y-m-d H:i:s");
if($SN=="")
{
	die("Currency blank ,,,Sorry");
}

$qq="Update vacancy set number='$number',intro='$intro',description='$des',updated='$dt2' where position='$SN'";
mysqli_query($con,$qq);

echo "<script>location.href='dispvacancy.php'</script>"
?>
