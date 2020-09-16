<?php
 session_start();
if(isset($_SESSION['uname']))

{

include'connect.php';


$msg="";
$name=$_POST['n1'];
$details=$_POST['n2'];
$date=$_POST['n3'];


$target="file/".basename($_FILES['file']['name']);



$file=$_FILES['file']['name'];
 $tmp_name = $_FILES['file']['tmp_name'];



$qq="Insert into event(Name,Details,File,Date)values('$name','$details','$file','$date')";
$qq1=mysqli_query($con,$qq);
if(!$qq1)
{
die("sorry".mysqli_error($con));
}
else
{
move_uploaded_file($tmp_name,$target);
echo "<script>
alert('Sucessfully Inserted')
location.href='fileupl.php'</script>";
}}

	else
{
header("location:login.php");
}



?>
