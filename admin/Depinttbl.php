<?php 
include 'connect.php';
$query="Create table Dinterest(
SN int AUTO_INCREMENT PRIMARY KEY,
Dname varchar(50),
Rate int, 
Minbalance int, 
Intpayable varchar(50)
)";
$qq=mysqli_query($con,$query);
if(!$qq)
{
die("sorry".mysqli_error($con));
}
else
{
echo("Dinterst table Created");
}
?>