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
    <link rel="stylesheet" href="About.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="header">
        <div id="headM">
       <ul>
         <li>  <a href="../HtmlCssFiles/index.html">OLEKS</a></li>
       </ul>
   </div>
           <div id="headD">
        <ul>
            <li><a href="About.php">About Us</a></li>
            <li><a href="#">Search</a></li>
            <li><a href="#">Cart</a></li>
            <li> <a href="logout.php">Log out</a></li> 
             <li><a href="dashboard.php" class="<?php echo $hide ?>">Dashboard</a></li> 
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
           <h1>Oleks empowers people <br> to
            control their wealth.</h1>
            </div>

        </main>
        <section class="section1">
            <div class="divsection1">
            <span>OLEKS GIVES YOU THE POWER TO</span>
        </div>
        <div class="div2section1">
            <p class="secure"> Secure, Manage, and Exchange 
                cryptocurrency <br> on desktop,
                 mobile and hardware wallets.</p>
        </div>
        <div class="div3section1">
              <div class="div31section1">  
                At Exodus we pour our hearts 
                into every detail, from pixel-perfect
                icons to subtle sounds, creating
                a cryptocurrency experience that
                works for everyone.</div>
               <div class="div32section1">Our goal is to
                remove the geek requirement 
                and make it fun and 
                easy to learn and use 
                cryptocurrency. No technical 
                talk. No confusing steps - we
                 think it shows.</div>
        </div>
        <div class="srt">
            <div class="srt1">
                <p>01</p>
                Safe
            </div >
            <div class="srt1">
                <p>02</p>
                Reliable
            </div>
            <div class="srt1">
                <p>03</p>
                Trusted
            </div>
        </div>

        </section>
        <section class="section">
       
        </section>
        <section>
            <div class="found">
                <div class="found1">
                    <p>FOUNDED IN</p>
                    <h1>2015</h1>
                    <p>By leo and pashtrik</p>
                </div>
                <div class="found1">
                    <p>PRODUCT UPDATES</p>
                    <h1>200+</h1>
                    <p>New releases across desktop, mobile and hardware</p>
                </div>
                <div class="found1">
                    <p>NEW RELEASE EVERY</p>
                    <h1>2 Weeks</h1>
                    <p>Released software every two weeks since 2015</p>
                </div>
                <div class="found1">
                    <p>DIGITAL ASSETS</p>
                    <H1>150+</H1>
                    <P>Supported cryptocurrencies inside Exodus products</P>
                </div>
            </div>
        </section>
        <section class="worldmap">
            <p>EXODUS IS USED BY INDIVIDUALS ACROSS THE WORLD</p>
        </section>
        <section class="laptop">
<div class="laptop1">
    <div class="aboutus4">
        <img class="aboutus3" src="../img/aboutus3.jpg" alt="">
       </div>
       <div>
    <div class="work">
        <p>CAREERS</p>
        <H1>Working at Oleks</H1>
        <p>Is cryptocurrency your passion? <br>
            Join Oleks and work from anywhere 
            - all positions are 100% remote.</p>
    </div>
    <div class="comingsoon">
        <p class="comingsoon1">Coming Soon...</p>
    </div>
</div>
</div>
        </section>
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