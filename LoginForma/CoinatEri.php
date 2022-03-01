<?php
$hide="";
session_start();
if(!isset($_SESSION['email'])){
    header("location:LogIn.php");
}else{
    if($_SESSION['role'] == "admin" ){
        $hide = "";
    }else{
        $hide = "hide";
    }


?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS-Style/coinateri.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div id="header">
        <div id="headM">
       <ul>
           <li>OLEKS</li>
       </ul>
   </div>
           <div id="headD">
        <ul>
            <li><a href="About.php">About Us</a></li>
            <li><a href="News.php">News</a></li>
            <li><a href="#">Coin News</a></li>
            <li> <a href="logout.php">Log out</a></li> 
             <li><a href="../view/dashboard.php" class="<?php echo $hide ?>">Dashboard</a></li> 
        </ul>
        </div>
        <div class="signin">
        <div class="signin">
        <ul>
            <li><a href=""><?php
    echo "UserName: ".$_SESSION['username'];
    ?></a></li>
        </ul>
    </div>
    </div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>MarketCap</th>
            <th>Volume</th>
            <th>Total Supply</th>
        </tr>
    </thead>

        <tbody>
        <?php

// include_once '../LoginForma/loginValidate.php';

     include_once '../repository/coinsRepository.php';

     $coinsRepository = new CoinsRepository();

     $coins = $coinsRepository->getAllCoins();

     foreach($coins as $coin){
         echo
         "
         <tr>
             <td>$coin[Id]</td>
             <td>$coin[Name]</td>
             <td>$coin[Price]</td>
             <td>$coin[MarketCap]</td>
             <td>$coin[Volume]</td>
             <td>$coin[TotalSupply]</td>
         </tr>
         ";
     }

     ?>
        </tbody>

    </table>





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
          <a class="signfooter1" href="RegisterForm.html">SIGN ME UP!</a>
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
<?php
}
?>