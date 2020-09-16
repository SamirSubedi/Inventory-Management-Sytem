<?php 
$category=$_POST['n1'];
$intro=$_POST['n2'];
$descrip=$_POST['n3'];
$number=$_POST['n4'];

include 'connect.php';
$qq="Insert into supplier(sname,semail,sphone,saddress)values('$category','$intro','$descrip','$number')";
$qq1=mysqli_query($con,$qq);
if($qq1)
{
echo "<script>
alert('Sucessfully Inserted')
location.href='addsupplier.php'</script>";
}
else
{
	echo "error";
}



?>
