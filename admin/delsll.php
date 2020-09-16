<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"bhanu");
$id=$_GET['id'];
$name=$_GET['Name'];
$query="Delete from slider where SN=$id";
$res=mysqli_query($con,$query);
if($res)
{
echo "<script>location.href='viewslider.php'</script>";

}
?>
