<?php
session_start();
if(isset($_SESSION['email'])){
header('location:About.php');
}else{


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS-Style/login.css">
</head>
<body>
            <form class="form" action="LogIn.php" method="post">
                <h1>Log In to OLEKS</h1>
                <div class="div1">
                <input class="inputstil" type="text"  name="email" placeholder="Email..." id="email">
                <br>
                <br>
                <label style="color: red;" id="EmailMsg"></label>
                <br>
                <input class="inputstil" type="password" name="password" placeholder="Password..." id="password">
                <br>
                <label style="color: red;" id="passwordMsg"></label>
                <br>
                <input type="submit" name="loginBtn" value="LOGIN" class="login" id="loginjs">
                <br>
                <div class="forgot">
                <label class="checkbox">
                    <input type="checkbox" checked="checked">Remember Me
                  </label>
                  <span> <a href="#">Forgot Password</a></span>
                </div>
                </div>
                <br>
                <div class="orwith">
                    <p><b> - Or Sign in With -</b> </p>
                </div>
                <div class="social">
                    <div class="social2"><a class="a" href="#">Facebook</a></div>
                   <div class="social2"> <a class="a" href="#">Google</a></div>
                </div>
                <div><br><a class="dont" href="../view/RegisterForm.php">Dont have an account?</a>
                <a href="../view/RegisterForm.php">Sign Up</a></div>
            </form>
<?php

     //   require_once '../view/dashboard.php';

     require_once 'loginValidate.php';
     
?>
 
    </main>
    <script>
   var button = document.getElementById("loginjs");

   var EmailMsg = document.getElementById("EmailMsg");

   var passwordMsg = document.getElementById("passwordMsg");

   var emailRegex = /^\w+[._-]?\w+@[A-Za-z]+[-]?[A-Za-z]+\.[A-Za-z]{2,3}/;

   var passwordRegex = /^[A-Z]\w+\d{2}/;

   button.addEventListener("click",function(event){
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

           

            if(email == "" || email == null){
                EmailMsg.innerText="Fill Email field!";
                event.preventDefault();
            }else{
                if(emailRegex.test(email)){
                    EmailMsg.innerText="";
                }else{
                    EmailMsg.innerText="Email was not written correctly!";
                    event.preventDefault();
                }
            }
            
            if(password == "" || password == null){
                passwordMsg.innerText="Fill password field!";
                event.preventDefault();
            }else{
                if(passwordRegex.test(password)){
                    passwordMsg.innerText="";
                }else{
                    passwordMsg.innerText="Password was not written correctly!";
                    event.preventDefault();
                }
            }     
        })
           
    </script>
</body>
</html>
<?php
}
?>