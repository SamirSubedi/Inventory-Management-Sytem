<?php session_start();
if(isset($_SESSION['uname']))
{

include 'connect.php';
$name=$_POST['n1'];
$details=$_POST['n2'];
$bu=$_POST['n3'];
$se=$_POST['n4'];
$see=$_POST['n5'];

$qq="Insert into forex(Currency,Unit,Buying,Selling)values('$name','$details','$bu','$se')";
mysqli_query($con,$qq);
if(!$qq)
{
die("sorry".mysqli_error($con));
}
else
{

echo "<script>
alert('Sucessfully Inserted')

location.href='insfor.php'</script>";
}}


	else
{
header("location:login.php");
}



?>



