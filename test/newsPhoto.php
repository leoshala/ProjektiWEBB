<?php
$msg="";
if(isset($_POST['upload'])){

    $target = __DIR__ . "\..\img\\".basename($_FILES['image']['name']);

    $db = mysqli_connect("localhost","root","","OLEKS");
   
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];

    $sql = "INSERT INTO images (img, description) VALUES ('$image','$text')";

    mysqli_query($db,$sql);

        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            header("location: newsPhoto.php");
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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div id="header">
        <div id="headM">
       <ul>
         <li>  <a href="index.php">OLEKS</a></li>
       </ul>
   </div>
           <div id="headD">
        <ul>
            <li><a href="About.php">About Us</a></li>
            <li><a href="News.php">News</a></li>
            <li><a href="CoinatEri.php">Coin News</a></li>
            <li> <a href="logout.php">Log out</a></li> 
             <li><a href="../view/dashboard.php" class="<?php// echo $hide ?>">Dashboard</a></li> 
        </ul>
        </div>
        <div class="signin">
        <ul>
            <li><a href=""><?php
  //  echo "UserName: ".$_SESSION['username'];
    ?></a></li>
        </ul>
    </div>
        
        </div>
    
<form action="#" method="post" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div>
    <input type="file" name="image" class="descriptiontext">
</div>
<div>
    <textarea name="text"  cols="40" rows="4" placeholder="Pershkrimi....." class=""></textarea>
</div>
<div>
    <input type="submit" name="upload" value="Upload image" onclick="return mess();">
</div>

</form>

<div id="content">


    <?php
        $db = mysqli_connect("localhost","root","","OLEKS");
        $sql = "SELECT * FROM images";
        $result = mysqli_query($db,$sql);
 
        while($row = mysqli_fetch_array($result)){
            echo "<div id='img_div'>";
            echo "<img src='../img/".$row['img']."' >";
            echo "<p class='descriptiontext'>".$row['description']."</p>";
            echo "</div>";
        }

?>


</div>
<script type="text/javascript">

    function mess(){
        alert("Uploading image successful");
        return true;
    }
</script>


<footer >
        <div class="footer">
      <div>
          <h2>Products</h2>
          <p>Desktop Wallet</p>
          <p>Mobile Wallet</p>
          <p>Trezor Hardware Wallet</p>
          <p>OLEKS Crypto Apps</p>
      </div>
      <div>
          <h2>Support</h2>
          <p>Support</p>
          <p>Knowledge</p>
          <p>Legal Inquiries</p>
          <p>Status</p>
      </div>
      <div>
          <h2>Crypto News</h2>
          <p>News and Insights</p>
          <p>YouTube</p>
          <p>Newsletter</p>
      </div>
      <div>
          <h2>Company</h2>
          <p>About Us</p>
          <p>Investors</p>
          <p>Careers</p>
          <p>Contact Us</p>
          <p>Brand Guidelines</p>
      </div>
      <div class="signdivfooter1">
          <h2>Subscribe to OLEKS</h2>
          <p>Sign up to receive our newsletter with updates about your wallet.</p>
          <div class="signfooter">
              <a class="signfooter1" href="#">Subscribe!</a>
          </div>
      </div>
    </div>
      <div class="footersocial">
          <img class="logoimgole" src="../img/logoimg.png" alt="">
          <h1>OLEKS</h1>
         <div class="copyright">
            <p>Copyright © 2021 OLEKS Movement, Inc.</p>
            <p>OLEKS was co-founded by Daniel Castagnoli and JP Richardson.</p>
         </div>
         <div>
          <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-google"></a>
    <a href="#" class="fa fa-linkedin"></a>
    <a href="#" class="fa fa-youtube"></a>
    <a href="#" class="fa fa-instagram"></a>
    </div>
      </div>
      <div class="privacy">
          <p>OLEKS is a software platform ONLY and does not conduct any independent 
              diligence on or substantive review of any blockchain asset, 
              digital currency, cryptocurrency or associated funds. You are fully and
               solely responsible for evaluating your investments, for determining whether
                you will exchange blockchain assets based on your own, and for all your
                 decisions as to whether to exchange blockchain assets with the OLEKS
                  in app exchange feature. In many cases, blockchain assets you exchange
                   on the basis of your research may not increase in value, and may 
                   decrease in value. Similarly, blockchain assets you exchange on the 
                   basis of your research may increase in value after your exchange.</p>
          <p class="privacy1">Past performance is not indicative of future results. Any investment in blockchain assets involves the risk of loss of part or all of your investment. The value of the blockchain assets you exchange is subject to market and other investment risks.</p>
         
        </div>
        <div class="policyprivacy">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
        </div>
    </footer>
    
</body>
</html>