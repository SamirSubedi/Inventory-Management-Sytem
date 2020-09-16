
<?php 
$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"bhanu");

$category=$_POST['n1'];
$intro=$_POST['n2'];
$descrip=$_POST['n3'];
$number=$_POST['n4'];
$dt2=date("Y-m-d H:i:s");

$target="file/".basename($_FILES['file']['name']);



$file=$_FILES['file']['name'];
 $tmp_name = $_FILES['file']['tmp_name'];



$qq="Insert into vacancy (position,intro,description,number,updated,image)values('$category','$intro','$descrip','$number','$dt2','$file')";
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
location.href='dispvacancy.php'</script>";
}
?>
?>
