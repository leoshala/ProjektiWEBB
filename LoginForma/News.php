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


<!DOCTYPE html>
<html>
  <head>
    <title>Webpage</title>
    <link rel="stylesheet" href="../CSS-Style/news.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <div class="bg">
      <header class="container">
        <div class="navbar">
          <div></div>
          <div class="logo-div">
            <img src="../img/logo.png.png" class="logoo" />
          </div>
        </div>
        <div class="menu">
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="CoinatEri.php">Coins News</a></li>
          </ul>
          <ul>
          <li> <a href="logout.php">Log out</a></li> 
             <li><a href="../view/dashboard.php" class="<?php echo $hide ?>">Dashboard</a></li> 
         
          </ul>
        </div>
      </header>
    </div>
   

  
<div class="shibat" style="max: width 1000px;" >

<div class="mySlides1">
  <img src="../img/shibu1.png" class="shibut" style="width: 800px;;">
</div>
<div class="mySlides1">
  <img src="../img/shibu2.jpg"  class="shibut"  style="width: 800px;">
</div>

<div class="mySlides1">
  <img src="../img/shibu3.jpeg"  class="shibut"  style="width:800px;">
</div>
</div>
</div>
    <div class="n1 container">
     
  
    <div class="container">
    <h1>Recent Crypto News</h1>
      <div class="cryptonews">
        <div class="news">
          <a href=""><img class="news-img" src="../img/foto.jpeg" /></a>
          <h4 class="news-title">
            <a href=""
              >My 2 Sats: Canada threatens democracy by debanking <br />its own
              citizens</a
            >
          </h4>
        </div>

        <script>
var slideIndex = 0;
showSlides();
//foto

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides1");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    

  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>





        <div class="news">
          <a href=""><img class="news-img" src="../img/censored.jpeg" /></a>
          <h4 class="news-title">
            <a href=""
              >Canada blocks its citizens bank accounts - does Bitcoin solve
              this?</a
            >
          </h4>
        </div>
        <div class="news">
          <a href=""><img class="news-img" src="../img/flagg.jpeg" /></a>
          <h4 class="news-title">
            <a href=""
              >Swiss bank leak exposes dark corners of legacy finance</a
            >
          </h4>
        </div>
        <div class="news">
          <a href=""><img class="news-img" src="../img/etherum4.png" /></a>
          <h4 class="news-title">
            <a href="">The rise of alternative layer one protocols</a>
          </h4>
        </div>
        <div class="news">
          <a href=""><img class="news-img" src="../img/sun.jpeg" /></a>
          <h4 class="news-title">
            <a href="">US legislators move to support crypto (sorry Canada)</a>
          </h4>
        </div>
        <div class="news">
          <a href=""><img class="news-img" src="../img/algorand.png" /></a>
          <h4 class="news-title"><a href="">Algorand hires new CEO</a></h4>
        </div>
      </div>
    </div>

    <div class="get">
      <p><a href="" class="aget">GET OLEKS</a></p>
    </div>
    <div class="n1 container">
      <h1>Insights</h1>
    </div>
    <div class="container">
      <div class="cryptonews">
        <div class="news">
          <a href=""
            ><img class="news-img" src="../img/popularprotocol.jpg"
          /></a>
          <h4 class="news-title">
            <a href="">Top 3 Ethereum DeFi protocols</a>
          </h4>
        </div>
        <div class="news">
          <a href=""><img class="news-img" src="../img/nftscopyright.jpg" /></a>
          <h4 class="news-title">
            <a href="">Are NFTs copyrighted by law?</a>
          </h4>
        </div>
        <div class="news">
          <a href=""><img class="news-img" src="../img/decentralized.jpg" /></a>
          <h4 class="news-title">
            <a href="">Decentralized social media apps to try out</a>
          </h4>
        </div>
      </div>
    </div>

    <div class="get">
      <p><a href="" class="aget">ALL INSIGHTS</a></p>
    </div>
    <div class="n1 container">
      <h1>Learn</h1>
    </div>
    <div class="container">
      <div class="cryptonews">
        <div class="news">
          <a href=""><img class="news-img" src="../img/civic.jpg" /></a>
          <h4 class="news-title">
            <a href="">What is Civic (CVC)?</a>
          </h4>
        </div>
        <div class="news">
          <a href=""><img class="news-img" src="../img/etherumtokens.jpg" /></a>
          <h4 class="news-title">
            <a href=""
              >Innovative Ethereum DeFi tokens at the edge of finance</a
            >
          </h4>
        </div>
        <div class="news">
          <a href=""><img class="news-img" src="../img/solana2.jpg" /></a>
          <h4 class="news-title">
            <a href="">The must-know Solana DeFi tokens</a>
          </h4>
        </div>
      </div>
    </div>
    <div class="get">
      <p><a href="" class="aget">ALL LEARN</a></p>
    </div>
    <div class="n1 container">
      <h1>Vidoes</h1>
    </div>
    <div class="container">
      <div class="cryptonews">
        <div class="news">
          <a href=""><img class="news-img" src="../img/civic.jpg" /></a>
          <h4 class="news-title">
            <a href="">What is Civic (CVC)?</a>
          </h4>
        </div>
        <div class="news">
          <a href=""><img class="news-img" src="../img/etherumtokens.jpg" /></a>
          <h4 class="news-title">
            <a href=""
              >Innovative Ethereum DeFi tokens at the edge of finance</a
            >
          </h4>
        </div>
        <div class="news">
          <a href=""><img class="news-img" src="../img/solana2.jpg" /></a>
          <h4 class="news-title">
            <a href="">The must-know Solana DeFi tokens</a>
          </h4>
        </div>
      </div>
    </div>
    <div class="get">
      <p><a href="" class="aget">ALL VIDEOS</a></p>
    </div>

    <footer>
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
          <p>
            Sign up to receive our newsletter with updates about your wallet.
          </p>
          <div class="signfooter">
            <a class="signfooter1" href="">Subscribe!</a>
          </div>
        </div>
      </div>
      <div class="footersocial">
        <img class="logoimgole" src="../img/logoimg.png" alt="" />
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
        <p>
          OLEKS is a software platform ONLY and does not conduct any independent
          diligence on or substantive review of any blockchain asset, digital
          currency, cryptocurrency or associated funds. You are fully and solely
          responsible for evaluating your investments, for determining whether
          you will exchange blockchain assets based on your own, and for all
          your decisions as to whether to exchange blockchain assets with the
          OLEKS in app exchange feature. In many cases, blockchain assets you
          exchange on the basis of your research may not increase in value, and
          may decrease in value. Similarly, blockchain assets you exchange on
          the basis of your research may increase in value after your exchange.
        </p>
        <p class="privacy1">
          Past performance is not indicative of future results. Any investment
          in blockchain assets involves the risk of loss of part or all of your
          investment. The value of the blockchain assets you exchange is subject
          to market and other investment risks.
        </p>
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
