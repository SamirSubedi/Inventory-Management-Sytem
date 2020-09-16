<?php
include 'connect.php';
$name=$_POST['n1'];
$details=$_POST['n2'];

if($name=="")
{
  die(" blank ,,,Sorry");
}

$qq="Insert into linterest(lname,PRate)values('$name','$details')";
mysqli_query($con,$qq);
if(!$qq)
{
die("sorry".mysqli_error($con));
}
else
{
echo "<script>
alert('Sucessfully Inserted')

location.href='frminslnint.php'</script>";
}

?>