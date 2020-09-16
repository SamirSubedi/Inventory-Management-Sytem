<?php
include 'connect.php';
$name=$_POST['n1'];
$details=$_POST['n2'];
$bu=$_POST['n3'];
$se=$_POST['n4'];
if($name=="")
{
  die("Currency blank ,,,Sorry");
}

$qq="Insert into dinterest(Dname,Rate,Minbalance,Intpayable)values('$name','$details','$bu','$se')";
mysqli_query($con,$qq);
if(!$qq)
{
die("sorry".mysqli_error($con));
}
else
{
echo "<script>location.href='frminsdepoint.php'</script>";
}

?>