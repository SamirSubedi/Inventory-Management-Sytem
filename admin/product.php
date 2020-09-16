
<?php 
include 'header1.php';?>


<br>
<html>
<head>
	<style>
	#abc
	{
		color:black;
	}
#abc:hover
{
	text-decoration: none;
	color: green;
}
#abc:visited
{
	text-decoration: none;
	color: navy;
}
	.container{
    margin-top: 4%;
    margin-left: 8%;
}

	.card:hover{
    -webkit-box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.95);
    -moz-box-shadow: -1px 9px 40px -12px rgba(0,0,0,0.95);
    box-shadow: -1px 9px 40px -12px rgba(0, 0, 0, 0.95);
}
</style>
</head>
<body>


<div class="container">
  <h2 align="center"><b>Products</b></h2><hr>
    <div class="row">
 <?php
  $sql = "select * from product";
  $con = mysqli_connect("localhost","root","","bhanu");
  $result=mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)){
      ?>
    
<div class='col col-sm-6 col-lg-3 '> <div class='card text-center bg-light ' >
	 <div class="card-header">
 <b> <p align="left" class="text-success"><?php echo $row['price'];?> &nbsp;</p></b>
  </div>
    <img class='card-img-top' src='admin/product/<?php  echo $row['image'];?>' width='100px' height='220px'>

    <div class='card-body'>

     <?php  echo "<a  href='showvacancy.php?id=".$row['pid']."'id='abc'>";?><h3 class='card-title'><?php echo $row['product_name'];?></h3></a>
      <b><p class='card-text'><?php if ($row['product_cat'] == "") {echo "<br>";}else{echo $row['product_cat'];} ?></p></b>
    

  
    </div>
  </div><?php if($row['pid']%3==0){ echo "<br>" ;} ?></div>
 <?php  }
  ?>
</div>
  </marquee>
</div>
<script>
    $(document).ready(function(){

        $('.col-lg-4').hover(
            // trigger when mouse hover
            function(){
                $(this).animate({
                    marginTop: "-=1%",
                },200);
            },

            // trigger when mouse out
            function(){
                $(this).animate({
                    marginTop: "0%"
                },200);
            }
        );
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<?php 
include 'footer.php';?>


