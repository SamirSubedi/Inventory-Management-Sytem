<?php

if(isset($_POST['btn']))
{
$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"bhanu");
$sn=$_POST['id'];
$name=$_POST['n1'];
$target1="slider/".basename($_FILES['image1']['name']);
$target2="slider/".basename($_FILES['image2']['name']);
$target3="slider/".basename($_FILES['image3']['name']);



$image1=$_FILES['image1']['name'];
$tmp_name1 = $_FILES['image1']['tmp_name'];



$image2=$_FILES['image2']['name'];
 $tmp_name2 = $_FILES['image2']['tmp_name'];


$image3=$_FILES['image3']['name'];
 $tmp_name3 = $_FILES['image3']['tmp_name'];



$qq="Update slider set Name='$name',Image1='$image1', Image2='$image2' , Image3='$image3' where SN='$sn' ";
mysqli_query($con,$qq);
if($qq)
{
		move_uploaded_file($tmp_name1,$target1);
move_uploaded_file($tmp_name2,$target2);
move_uploaded_file($tmp_name3,$target3);
echo("Slider table Updated");

}
else
{
echo("sorry".mysqli_error($con));
}

}
?>