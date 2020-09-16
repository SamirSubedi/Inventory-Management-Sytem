
<?php 
if(isset($_POST["btnsave"]))
{
$dt2=date("Y-m-d H:i:s");
$category=$_POST['n1'];

$intro=$_POST['n2'];
$descrip=$_POST['n3'];
$number=$_POST['n4'];



include 'connect.php';
$target="file/".basename($_FILES['file']['name']);



$file=$_FILES['file']['name'];
 $tmp_name = $_FILES['file']['tmp_name'];



$qq="Insert into career(postion,intro,description,number)values('$category','$intro','$descrip','$number')";
$qq1=mysqli_query($con,$qq);


    move_uploaded_file($tmp_name, $target_file);
     echo "<script>
alert('Sucessfully Inserted')
location.href='addvacancy.php'</script>";



}



?>
