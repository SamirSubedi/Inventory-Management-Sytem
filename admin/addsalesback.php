
<?php 
include 'connect.php';

$party=$_POST['n8'];
$date=$_POST['n3'];
$no="1111";
$payment=$_POST['optradio'];
$area=$_POST['n9'];
$man=$_POST['n7'];

$query="Select * from product";

$re=mysqli_query($con,$query);
 while($row=mysqli_fetch_array($re)){
 $product=$row['pname'];
  $qn=$row['pid'];
if(isset(($_POST[$product]))){ 
$mar=$row['quantity'];
$name=$_POST[$product];
$quantity=$_POST[$qn];
$margin=$_POST[$mar];
$pric="50";
if($mar>$quantity)
{
  $updated=$mar-50;
$q="Update product set quantity = '$updated'  where pname='$name'";
$qq0=mysqli_query($con,$q);
if($qq0){

$qq="Insert into sales(Pname,Party,quantity,price,pmt,area,date,sman,invno)values('$name','$party','$quantity',
'$pric','$payment','$area','$date','$man','$no')";
$qq1=mysqli_query($con,$qq);
}}}}
/*
$quer="Update product set quantity ='$quantity' where pname='$name'";
$res=mysqli_query($con,$quer);
if($res){echo "success";}
}}
/*Margin 
//if($mar>$quantity)
//{
 // $ab=$mar-$quantity;

        //$query="Update product set quantity ='$ab' where pname='$name'";    
 $res=mysqli_query($con,$query);}}/*
$query="Select price from purchase where pname='$name'";
$res=mysqli_query($con,$query);
 while($row=mysqli_fetch_array($res))
 {
$pri=$row['price'];
}
$pri=($pri+$pri*$margin/100);
$qq="Insert into sales(Pname,Party,quantity,price,pmt,area,date,sman,invno)values('$name','$party','$quantity',
'$pric','$payment','$area','$date','$man','$no')";
$qq1=mysqli_query($con,$qq);


}}
/*
else
{

  echo "<script>
alert('SORRY !!! YOU DON'T HAVE SUFFICIENT STOCK ".$name."  WE Can't Procced further<br>Available stock= ".$ab." SORRY ')
location.href='viewstock.php'</script>";
}
}
}
/*echo "<script>
alert('Sucessfully Inserted')
location.href='addsales.php'</script>";*/

$no=$no+1; 
?>