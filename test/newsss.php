<?php
$msg="";
if(isset($_POST['upload'])){

    $target = "images/".basename($_FILES['image']['name']);

    $db = mysqli_connect("localhost","root","","OLEKS");
   
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];

    $sql = "INSERT INTO images (image, text) VALUES ('$image','$text')";

    mysqli_query($db,$sql);

        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            $msg = "image uploaded succesfully";
        }else{
            $msg = "there was a problem uploading image";
        }

}

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" type="text/css" href="stylenews.css">
</head>
<body>

<div id="content">
<form action="newsss.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
    <input type="file" name="image">
</div>
<div>
    <textarea name="text"  cols="40" rows="4" placeholder="asfkaskf"></textarea>
</div>
<div>
    <input type="submit" name="upload" value="Upload image">
</div>

</form>


</div>
    
</body>
</html>