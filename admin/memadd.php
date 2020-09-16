
<?php 

 session_start();
if(isset($_SESSION['uname']))

{

include'connect.php';



$name=$_POST['n1'];
$nam=$_POST['post'];
$nae=$_POST['contact'];





$target_dir = "team/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    	 $image=$_FILES["fileToUpload"]["name"];
 $tmp_name = $_FILES["fileToUpload"]["tmp_name"];
      
  
}
// Check if file already exists

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

} else {

$qq="Insert into partners(name,pname,email,post)values('$name','$target_file','$nae','$nam')";
$qq1=mysqli_query($con,$qq);


    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
     echo "<script>
alert('Sucessfully Inserted')
location.href='addmem.php'</script>";
  


}}






  else
{
header("location:login.php");
}



?>






