
<?php 
if(isset($_POST["btnsave"]))
{

$fname=$_POST['n1'];

$lname=$_POST['n2'];
$name=$fname.$lname;
$email=$_POST['n3'];
$number=$_POST['n4'];
$question=$_POST['n6'];
$position=$_POST['n7'];



include 'connect.php';
$target="file/".basename($_FILES['file']['name']);



$file=$_FILES['file']['name'];
 $tmp_name = $_FILES['file']['tmp_name'];



$qq="Insert into userdata(name,email,phone,questions,positions) values ('$name','$email','$number','$question','$position')";
$qq1=mysqli_query($con,$qq);
$to = 'samirsubedi3@gmail.com';

//sender
$from = $email;
$fromName = $name;

//email subject
$subject = $position; 

//attachment file path


//email body content
$htmlContent = '<h1>PHP Email with Attachment</h1>
    <p>This email has sent from PHP script with attachment.</p>';

//header for sender info
$headers = "From: $fromName"." <".$from.">";

//boundary 
$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

//headers for attachment 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

//multipart boundary 
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

//preparing attachment
if(!empty($file) > 0){
    if(is_file($file)){
        $message .= "--{$mime_boundary}\n";
        $fp =    @fopen($file,"rb");
        $data =  @fread($fp,filesize($file));

        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
        "Content-Description: ".basename($file)."\n" .
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
}
$message .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;

//send email
$mail = @mail($to, $subject, $message, $headers, $returnpath); 

//email sending status
echo $mail?"<h1>Mail sent.</h1>":"<h1>Mail sending .</h1>";








    
     echo "<script>
alert('Sucessfully Forwarded')
location.href='../sendcv.php'</script>";



}



?>
