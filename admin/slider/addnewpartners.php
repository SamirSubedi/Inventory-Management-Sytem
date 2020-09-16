<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add new Partners</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
   <button class="btn btn-success navbar-btn" style="width:110px;">Back to site</button>
  </a>
   <a class="navbar-brand" href="dashboard.php">
    <button class="btn btn-light navbar-btn" style="width:100px;margin-left: 500px;">Home</button>
  </a>
</nav>
<br>

<div class="container text-center">
  <form action="uploadpartner.php" method="post" enctype="multipart/form-data"> 
  <div class="bg-light">
      <br><br><br>
      <div id="imagePreview"><img id="imagePreview" src="images/img.png" width="150px" height="150px"></div><br>
      <div class="custom-file">
            <label class="custom-file-label" id="imagefile">Upload Image</label>
            <input type="file" class="custom-file-input" id="file" onchange="fileValidation()" name="pname">
        </div>
      <script type="text/javascript">
        function fileValidation(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var filename = fileInput.files[0].name;
    var size = fileInput.files[0].size;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload image only having extensions .jpeg/.jpg/.png/.gif');
        fileInput.value = '';
        return false;
    }
    else if (size > 2000000) {
      alert('Maximum image size exceeds 2MB');
        fileInput.value = '';
        return false;
    }
    else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"width="150px" height="150px"/>';
                document.getElementById('imagefile').innerHTML = filename;
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
      </script>      
  <br>

  

    <div class="form-row mt-3">
        <div class="input-group input-group-lg col-md-6 mx-auto">
            <div class="input-group-prepend">
                <span class="input-group-text">Name</span>
            </div>
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="name">
        </div></div> 
  <br>
 <input type="submit" name="btn" class="btn btn-outline-success"></form>
</div>

</body></html>


