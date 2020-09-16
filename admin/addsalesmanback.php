
<?php 


$name=$_POST['n1'];

$lname=$_POST['n2'];
$number=$_POST['n3'];
$pdate=$_POST['n4'];
$address=$_POST['n5'];

include 'connect.php';

$target="product/".basename($_FILES['file']['name']);



$file=$_FILES['file']['name'];
 $tmp_name = $_FILES['file']['tmp_name'];


$qq="Insert into salesman(sname,slast,sphone,sdate,saddress,image)values('$name','$lname','$number',
'$pdate','$address','$file')";


$qq1=mysqli_query($con,$qq);


if(!$qq1)
{
die("sorry".mysqli_error($con));
}
else
{
move_uploaded_file($tmp_name,$target);
echo "<script>
alert('Sucessfully Inserted')
location.href='addsalesman.php'</script>";
}
   
?>
