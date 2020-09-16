<?php

if(isset($_POST['btn']))
{
$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"bhanu");
$SN=$_POST['n1'];
$details=$_POST['n2'];
$bu=$_POST['n3'];
$se=$_POST['n4'];
if($SN=="")
{
	die("Currency blank ,,,Sorry");
}

$qq="Update forex set Unit='$details',Buying='$bu',Selling='$se' where Currency='$SN'";
mysqli_query($con,$qq);
if(!$qq)
{
die("sorry".mysqli_error($con));
}
else
{
die("Forex table Updated");
}

}
?>
<!DOCTYPE html>
<html>
<head>
<title>Form</title>
</head>
<body>
	
<form name="f" method="POST" action="editfor.php" enctype="multipart/form-data">



Currency: 	
<?php
$con=mysqli_connect("localhost","root","");

 echo"<input type='text' name='n1' value='".$_GET['Currency']."'>"?>
</br>
Unit       :     <input type="number" name="n2"></br>
Buying     :<input type="number" name="n3" step="any"></br>

Selling    :<input type="number" name="n4" step="any"></br>


<input type="submit" name="btn"/>

</form>

</body>
</html>
