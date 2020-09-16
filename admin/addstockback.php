
<?php 



$proname=$_POST['n1'];

$prodetail=$_POST['n2'];

include 'connect.php';

$c=0;
 
    $query="Select * from product where pname='$proname' ";
 $res=mysqli_query($con,$query);
 
 
     while($row = mysqli_fetch_array($res)){
      if($row!=0)
   {
     $abc=$row['pname']; 
   }
   
     	if (strcasecmp($abc, $proname) == 0) {
     {
     	$c=1;
     	
     }
  }}
 
       if($c==0)
       {
       
       	 $query="Insert into product(pname,pdes)values ('$proname','$prodetail') ";
 $res=mysqli_query($con,$query);
 echo "<script>
alert('Sucessfully Inserted')
location.href='addsales.php'</script>";

} else
{
	echo "<script>
alert('Product is already in the list ')
location.href='addstock.php'</script>";
}




   
?>
