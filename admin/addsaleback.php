
<?php 
include 'connect.php';
session_start();
$added=$_SESSION['uname'];
$dt2=date("Y-m-d H:i:s");
$party=$_POST['n8'];
$date=$_POST['n3'];
$no=$_POST['n85'];
$payment=$_POST['optradio'];
$area=$_POST['n9'];
$man=$_POST['n7'];
$disc=$_POST['n28'];
$vat=$_POST['n33'];
$fact="SALES";

$query="Select * from product";

$re=mysqli_query($con,$query);
 while($row=mysqli_fetch_array($re)){
 $product=$row['pname'];
  $qn=$row['pid'];
  $pp=$row['pdes'];//profit
if(isset(($_POST[$product]))){ 
$mar=$row['quantity'];
$name=$_POST[$product];
$quantity=$_POST[$qn];
$pric=$_POST[$pp];
if($mar>$quantity)
{
	
  $updated=$mar-$quantity;
  $quantit="- ".$quantity;
$q="Update product set quantity ='$updated', updatedate='$dt2' , updatedby='$added' ,invoiceno='$no' ,changemadeby ='$fact' , updatedqn ='$quantit' where pid='$qn' ";
$qq0=mysqli_query($con,$q);
if($qq0){

$qq="Insert into sales(Pname,Party,quantity,price,pmt,area,date,sman,discount,vat,invno,enteredby,entereddate)values('$name','$party','$quantity',
'$pric','$payment','$area','$date','$man','$disc','$vat','$no','$added','$dt2')";
$qq1=mysqli_query($con,$qq);
echo "<script>
alert('<h3>Sucessfully Inserted<h3>')
location.href='salesinvoice.php'</script>";

}}

else
{
echo "<script>
alert('SORRY !!! YOU DON'T HAVE SUFFICIENT STOCK ".$name."  WE Can't Procced further<br>Available stock= ".$mar." SORRY ')
location.href='viewstock.php'</script>";
break;

}}}
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