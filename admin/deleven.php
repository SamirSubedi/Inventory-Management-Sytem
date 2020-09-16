<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"bhanu");
$id=$_GET['id'];

$query="Delete from event where SN=$id";
$res=mysqli_query($con,$query);
if($res)
{
echo "<script>location.href='disevent.php'</script>";

}
?>
