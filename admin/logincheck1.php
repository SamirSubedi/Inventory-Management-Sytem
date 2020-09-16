<?php
session_start();
$aa=$_POST['name'];
$ab=$_POST['pwd'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"finman");
$we="Select * from login";
$cou=0;
$res=mysqli_query($con,$we);
while($arr=mysqli_fetch_array($res))
{
if($arr['Username']==$aa && $arr['Password']==$ab)

{
	$cou=$cou+1;
	break;
	
}}
if($cou>0)
{
	$_SESSION['uname']=$aa;
    echo "<script>location.href='restore.php'</script>";	
}
else
{
header("location:login1.php");
}
?>

