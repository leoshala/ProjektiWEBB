<?php
$msg="";
if(isset($_POST['upload'])){

    $target = __DIR__ . "\..\img\\".basename($_FILES['image']['name']);

    $db = mysqli_connect("localhost","root","","OLEKS");
   
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];

    $sql = "INSERT INTO images (img, description) VALUES ('/img/$image','$text')";

    mysqli_query($db,$sql);

        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            $msg = "image uploaded succesfully";
        }else{
            $msg = "there was a problem uploading image";
        }

}
if(!empty($msg)){
    echo '<h1>'.$msg.'</h1>';
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
    <?php
        $db = mysqli_connect("localhost","root","","OLEKS");
        $sql = "SELECT * FROM images";
        $result = mysqli_query($db,$sql);
        while($row = mysqli_fetch_array($result)){
            echo "<div> id='img_div'>";
            echo "<img src='img/".$row['image']."'>";
            echo "<p>".$row['text']."</p>";
            echo "</div>";
        }


?>
<form action="news.php" method="post" enctype="multipart/form-data">
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