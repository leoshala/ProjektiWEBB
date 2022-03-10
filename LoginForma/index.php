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
        <link rel="stylesheet" href="../CSS-Style/index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
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
            <li><a href="Insights.php">Insights</a></li>
            <li> <a href="logout.php">Log out</a></li> 
            <li><a href="../view/dashboard.php" class="<?php echo $hide ?>">Dashboard</a></li> 
          
        </ul>
        </div>
        <div class="signin">
        <ul>
            <li><a href=""><?php
    echo "UserName: ".$_SESSION['username'];
    ?></a></li>
        </ul>
    </div>
        
        </div>
        <main class="main1">
            <div class="h1">
           <h1>OLEKS Bitcoin & <br>Crypto Wallet</h1>
            </div>
            <DIV class="p1">
                <p> Send, receive & exchange Bitcoin and 100+  with ease on the world's leading<strong> Desktop</strong>,<strong> Mobile</strong> and <strong>Hardware </strong>crypto wallets</p>
            </DIV>
            <div class="watch">
                <p><a href="" class="awatch"> WATCH VIEDO</a></p>
            </div>
            <div class="get">
                <p><a href="" class="aget">GET OLEKS</a></p>
            </div>
        </main>
      <section>
            <div class="desk">
                <img class="img1" src="../img/img2.png" alt="">
                <div class="adesk1"><p>Pro-level control to manage your cryptocurrency in one beautiful application…</p>
                 <div class="Aadesk"><p><a href="" class="adesk"> DESKTOP WALLET </a></p>
                  <p class="shenja"> <b>&rarr;</b></p></div>
            </div>
                </div> 
      </section>
      <section class="section2">
          <h1 class="h1Sec2">A New World of Crypto Apps</h1>
          <p class="p2Sec2">Apps transform OLEKS to give you more control over your wealth.<br>Discover how to easily earn interest and more...</p>
          <div class="explore">
            <p><a href="" class="explore1"> EXPLORE APPS</a></p>
        </div>
      </section>
      <section class="section3">
        <div class="symbol1">
            <p class="a1">&#9718;</p>
            <p class="b1">01</p>
            <p>Live charts & portfolio</p>
        </div>
        <div class="symbol2">
            <p class="a1">&#9637;</p>
            <p class="b1">02</p>
            <p>Built-in Exchange</p>
        </div>
        <div class="symbol3">
            <p class="a1">&#9851;</p>
            <p class="b1">03</p>
            <p> 24/7 human support</p>
         </div>
      </section>

      <div class="C150">
          <h1 class="C151">150+</h1>
          <p class="C152">150+ Cryptocurrency Assets</p>
      </div>
      <section>
          <div class="hexa">
             <div  id="hexa1" class="hexagon1"></div>
              <div class="hexagon2"></div>
              <div id="hexa1" class="hexagon3"></div>
              <div class="hexagon4"></div>
          </div>
          <div class="download1">
              <div><img src="../img/download1.svg" alt=""></div>
              <div><img src="../img/download2.svg" alt=""></div>
              <div><img src="../img/download3.svg" alt=""></div>
              <div><img src="../img/download4.svg" alt=""></div>
          </div>
          <div class="download2">
              <div><img class="dow2" src="../img/download5.svg" alt=""></div>
              <div><img class="dow2" src="../img/download6.svg" alt=""></div>
              <div><img class="dow2" src="../img/download7.svg" alt=""></div>
              <div><img class="dow2" src="../img/download8.svg" alt=""></div>
          </div>
          <div class="download3">
              <div><img class ="dow3" src="../img/download9.svg" alt=""></div>
              <div><img class ="dow3" src="../img/download10.svg" alt=""></div>
              <div><img class ="dow3" src="../img/download11.svg" alt=""></div>
              <div><img class ="dow3" src="../img/download12.svg" alt=""></div>
              <div><img class ="dow3" src="../img/download13.svg" alt=""></div>
              <div><img class="dow3" src="../img/download14.svg" alt=""></div>
              <div><img class ="dow3" src="../img/download15.svg" alt=""></div>
              <div><img class ="dow3" src="../img/download16.svg" alt=""></div>
              <div><img  class ="dow3" src="../img/download17.svg" alt=""></div>
            </div>
            <div class="download4">
                <div><img class="dow4" src="../img/download18.svg" alt=""></div>
                <div><img class="dow4" src="../img/download19.svg" alt=""></div>
                <div><img class="dow4" src="../img/download20.svg" alt=""></div>
                <div><img class="dow4" src="../img/download21.svg" alt=""></div>
            </div>
            <div class="download5">
                <div><img src="../img/download22.svg" alt=""></div>
                <div><img src="../img/download23.svg" alt=""></div>
                <div><img src="../img/download24.svg" alt=""></div>
                <div><img src="../img/download25.svg" alt=""></div>
            </div>
            <div class="hexa">
                <div  id="hexa1" class="hexagon1"></div>
                 <div class="hexagon2"></div>
                 <div id="hexa1" class="hexagon3"></div>
                 <div class="hexagon4"></div>
             </div>
             <div class="SEE">
                 <p class="see1"><a class="see2" href="#">SEE THE FULL LIST</a></p>
             </div>
           <div class="promo">
               <img class="promoleads" src="../img/promoleads.webp" alt="">
              <div> <img class="btcsvg" src="../img/btc.svg" alt=""></div>
              <div class="promo1"><p class="promo11"><b>Best Bitcoin Wallet for Beginners according to Investopedia!</b>
            </p></div>
            <div class="promo2"><p class="promo22"><b>Send, Receive and Exchange Bitcoin and more than 100 different cryptocurrencies...</b>
            </p></div>
            <div class="promo3"><a class="promo33" href="#">LEARN MORE ABOUT BITCOIN</a></div>
           </div>
           <div class="mob">
           <div><p class="mob1" >Manage Crypto on Mobile</p></div>
           <div><p class="mob2" >Control your digital assets while you're on the move with OLEKS for iOS and Android.</p>
           </div>
        </div>

      </section>  
      <section class="mobile">
     <div><img class="mob1png" src="../img/mob1.png" alt=""></div>
     <div><img class="mob2png" src="../img/mob2.png" alt=""></div>
     <div><img class="mob3png" src="../img/mob3.png" alt=""></div>
      </section>  
      <section class="sync">
          <div class="sync1">
              <p class="pbc">&#9851;</p>
              <p class="pbo">01</p>
              <p>Sync with your OLEKS Dekstop App</p>
          </div>
          <div class="sync1">
              <p class="pbc">&#9851;</p>
              <p class="pbo">02</p>
             <p>Exchange cypto in two taps</p>
          </div>
          <div class="sync1">
              <p class="pbc">&#9851;</p>
              <p class="pbo">03</p>
              <p>Monitor market movements on the go</p>
          </div>
      </section>
      
      <div class="slideshow-container">

        <div class="mySlides">
            <div class="text">Even if you’re just starting out with Bitcoin or cryptocurrencies you would still be able to use this wallet effortlessly. Exodus is the kind of product you “fall in love with” the first time you use it, and that’s quite rare in the cryptocurrency world.</div>
    
          <img class="img9ci" src="../img/99bit.png"  >
        </div>
        
        <div class="mySlides">
            <div class="text">Exodus was built with beginning cryptocurrency users in mind, but is also ideal for most mainstream cryptocurrency enthusiasts who are looking for a secure, easy to use, beautiful wallet.</div>
           <img class="img9ci" src="../img/coinBur.jpg" >
        </div>
        
        <div class="mySlides">
            <div class="text">With its simplicity, this wallet is great for beginners just getting into the crypto space. It also has great support, which is an essential feature for beginners getting into what many would consider a confusing market.</div>
    
          <img class="img9ci" src="../img/invest.jpg">
        </div>
        
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
        
        <script>
        
            var slideIndex = 1;
            showSlides(slideIndex);
        
            function currentSlide(n){
                showSlides(slideIndex = n);
            }
        
            function showSlides(n){
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
        
                if(n > slides.length){
                    slideIndex = 1;
                }
                if(n < 1){
                    slideIndex = slides.length;
                }
                for(i = 0 ;i<slides.length;i++){
                    slides[i].style.display = "none";
                }
                for(i = 0;i <dots.length;i++){
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                    slides[slideIndex-1].style.display = "block";
                    dots[slideIndex-1].style.display += "active";

                    
                }
            
        </script>
      <section class="sectionstar">
        <a class="sectionlink" href="#">
              <div class="sectionstar1">
            <p class="Excellent">Excellent</p>    
                  <img class="starimg" src="../img/starimg.png" alt="">
                  <p class="Excellent">1,273 reviews on </p>
                  <img class="starimg1" src="../img/staricon.png" alt=""> 
                  <p class="Excellent">Trustpilot</p>
                </div></a>
      </section>
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