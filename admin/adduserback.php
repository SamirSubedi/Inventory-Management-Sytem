<?php 
session_start();
$added=$_SESSION['uname'];
$category=$_POST['n1'];
$intro=$_POST['n2'];
$descrip=$_POST['n3'];
$dt2=date("Y-m-d H:i:s");


include 'connect.php';
$qq="Insert into login(Username,Password,permission,addedby,date)values('$category','$intro','$descrip','$added','$dt2')";
$qq1=mysqli_query($con,$qq);
if($qq1)
{
echo "<script>
alert('Sucessfully Inserted')
location.href='adduser.php'</script>";
}
else
{
	echo "error";
}



?>
