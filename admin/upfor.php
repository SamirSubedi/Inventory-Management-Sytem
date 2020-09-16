<?php

if(isset($_POST['btn']))
{
$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"bhanu");
$name=$_POST['n1'];
$details=$_POST['n2'];
$bu=$_POST['n3'];
$se=$_POST['n3'];

$qq="Insert into forex(Currency,Unit,Buying,Selling)values('$name','$details','$bu','$se')";
mysqli_query($con,$qq);
if(!$qq)
{
die("sorry".mysqli_error($con));
}
else
{
echo("Forex table Updated");
}

}
?>
<!DOCTYPE html>
<html>
<head>
<title>Form</title>
</head>
<body>
<form name="f" method="post" action="ins.php" enctype="multipart/form-data"/>
Currency   :<input type="text" name="n1"></br>
Unit       :     <input type="number" name="n2"></br>
Buying     :<input type="number" name="n3" step="any"></br>

Selling    :<input type="number" name="n4" step="any"></br>


<input type="submit" name="btn"/>
</form>
</body>
</html>
