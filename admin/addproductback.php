
<?php 

include 'connect.php';
session_start();
$added=$_SESSION['uname'];
$dt2=date("Y-m-d H:i:s");
$bill=$_POST['n1'];
$proname=$_POST['n2'];
$prodetail=$_POST['n4'];
$pdate=$_POST['n3'];
$quantity=$_POST['n5'];
$price=$_POST['n6'];
$quantit="+ ".$quantity;
$fact="PURCHASE";
$supplier=$_POST['n7'];
include 'connect.php';
$target="product/".basename($_FILES['file']['name']);



$file=$_FILES['file']['name'];
 $tmp_name = $_FILES['file']['tmp_name'];

$one="Select quantity from product where pname='$proname'";
$res=mysqli_query($con,$one);
   while($row = mysqli_fetch_array($res)){
$latest=$row['quantity'];

}
$updated=($quantity+$latest);

$q2="Update product set quantity = '$updated' ,updatedate ='$dt2', updatedby = '$added', invoiceno = '$bill',changemadeby ='$fact', updatedqn ='$quantit' where pname='$proname'";
$qq0=mysqli_query($con,$q2);
if($qq0){


$qq="Insert into purchase(bno,pname,pdetail,supplier,pdate,quantity,price,image)values('$bill','$proname','$prodetail',
'$supplier','$pdate','$quantity','$price','$file')";


$qq1=mysqli_query($con,$qq);
}

if(!$qq1)
{
die("sorry".mysqli_error($con));
}
else
{
move_uploaded_file($tmp_name,$target);
echo "<script>
alert('Sucessfully Inserted')
location.href='addproduct.php'</script>";
}
   
?>
