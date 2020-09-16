<?php
$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"bhanu");
$query="Create table login(
Username varchar(50),
Password varchar(50)
)";
$qq=mysqli_query($con,$query);
if(!$qq)
{
die("sorry".mysqli_error($con));
}
else
{
echo("Login table Created");
}
?>