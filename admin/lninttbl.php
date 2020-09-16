<?php 
include 'connect.php';
$query="Create table Linterest(
SN int AUTO_INCREMENT PRIMARY KEY,
Lname varchar(50),
PRate int
)";
$qq=mysqli_query($con,$query);
if(!$qq)
{
die("sorry".mysqli_error($con));
}
else
{
echo("Linterst table Created");
}
?>