<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="RegisterForm.css">
</head>
<body>
    

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="form">
<div class="form2">
    <div class="form1">
         <p>Name:</p>
        <input type="text" name="name" placeholder="name..." id="name">
        <label style="color: red;" id="nameMsg"></label>
        <p>Surname:</p>
        <input type="text" name="surname" placeholder="surname..." id="surname">
        <label style="color: red;" id="surnameMsg"></label>
        <p>Username:</p>
        <input type="text" name="username" placeholder="username..." id="username">
        <label style="color: red;" id="usernameMsg"></label>
        <p>Email:</p>
        <input type="text" name="email" placeholder="email..." id="email">
        <label style="color: red;" id="EmailMsg"></label>
        <p>Repeat Email:</p>
        <input type="email" name="email1" id="email1">
        <label style="color: red;" id="EmailMsg1"></label>
        <p>Password:</p>
        <input type="text" name="password" placeholder="password..." id="password">
        <label style="color: red;" id="passwordMsg"></label>
        <p>Repeat Password:</p>
    <input type="password" name="password1" id="password1">
    <label style="color: red;" id="passwordMsg1"></label>
        <p>Birthday</p>
        <input type="date" name="birthday" id="birthday">
         <label style="color: red;" id="birthdayMsg"></label>
        <p>Phone Number</p>
        <input type="tel" name="tel" id="tel">
        <label style="color: red;" id="telMsg"></label>
<br>
        <input type="submit" name="registerBtn" value="register" id="button1"><br><br>
        </div>
</div>
    </form>
<!--<form action="" method="post" class="form" >
    <div class="form2">
    <div class="form1">
        <p>RegisterForm</p>
    <p>Name:</p>
    <input type="text" name="name" id="name">
    <label style="color: red;" id="nameMsg"></label>
    <p>Surname:</p>
    <input type="text" name="surname" id="surname">
    <label style="color: red;" id="surnameMsg"></label>
    <p>Username:</p>
    <input type="text" name="username" id="username">
    <label style="color: red;" id="usernameMsg"></label>
    <p>Email:</p>
    <input type="email" name="email" id="email">
    <label style="color: red;" id="EmailMsg"></label>-->
 <!--   <p>Repeat Email:</p>
    <input type="email" name="email1" id="email1">
    <label style="color: red;" id="EmailMsg1"></label>
    <p>Password:</p>
    <input type="password" name="password" id="password">
    <label style="color: red;" id="passwordMsg"></label>-->
  <!--  <p>Repeat Password:</p>
    <input type="password" name="password1" id="password1">
    <label style="color: red;" id="passwordMsg1"></label>
    <p>Birthday</p>
    <input type="date" name="birthday" id="birthday">
    <label style="color: red;" id="birthdayMsg"></label>
    <p>Phone Number</p>
    <input type="tel" name="tel" id="tel">
    <label style="color: red;" id="telMsg"></label>
    <br>
    <input type="submit" names="registerBtn" value="Register" id="button1">
</div>
</div>
</form>-->

<?php

  include_once '../controller/registerController.php';
 

?>
<script class="script">
 /*  var button = document.getElementById("button1");

   var nameMsg = document.getElementById("nameMsg");

   var surnameMsg = document.getElementById("surnameMsg");

  var usernameMsg = document.getElementById("usernameMsg");

   var EmailMsg = document.getElementById("EmailMsg");

   var EmailMsg1 = document.getElementById("EmailMsg1");

   var passwordMsg = document.getElementById("passwordMsg");

   var passwordMsg1 = document.getElementById("passwordMsg1");

   var birthdayMsg = document.getElementById("birthdayMsg");

   var telMsg = document.getElementById("telMsg");

   var nameRegex = /[A-Za-z]/;

   var surnameRegex = /[A-Za-z]/;

   var usernameRegex = /[A-Za-z]/;

   var emailRegex = /^\w+[._-]?\w+@[A-Za-z]+[-]?[A-Za-z]+\.[A-Za-z]{2,3}/;

   var emailRegex1 = /^\w+[._-]?\w+@[A-Za-z]+[-]?[A-Za-z]+\.[A-Za-z]{2,3}/;

   var passwordRegex = /^[A-Z]\w+\d{2}/;

   var passwordRegex1 = /^[A-Z]\w+\d{2}/;

   var telRegex = /[0-9]{12}?/;

   button.addEventListener("click",function(event){
            var username = document.getElementById("username").value;
            var email = document.getElementById("email").value;
            var email1 = document.getElementById("email1").value;
            var password = document.getElementById("password").value;
            var password1 = document.getElementById("password1").value;
            var name= document.getElementById("name").value;
            var surname = document.getElementById("surname").value;
            var tel = document.getElementById("tel").value;
            var birthday = document.getElementById("birthday").value;

           
           if(username == "" || username == null){
                usernameMsg.innerText="Fill username field!";
                event.preventDefault();
            }else{
                if(usernameRegex.test(username)){
                    usernameMsg.innerText="";
                }else{
                    usernameMsg.innerText="username was not written correctly!";
                    event.preventDefault();
                }
            }

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
            if(email1 == "" || email1 == null){
                EmailMsg1.innerText="Repaet or fill Email fielld";
                event.preventDefault();
                
            }else{
                if(emailRegex1.test(email1) ){
                    EmailMsg1.innerText="";
                }else {
                    EmailMsg1.innerText="Email was not written correctly!";
                    event.preventDefault();
                }
            }
            
            if(password == "" || password == null || password <8){
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

            if(password1 == "" || password1 == null || password1 <8 || password1 != password){
                passwordMsg1.innerText="Repeat or fill password !";
                event.preventDefault();
            }else{
                if(passwordRegex1.test(password1)){
                    passwordMsg1.innerText="";
                }else{
                    passwordMsg1.innerText="Password was not written correctly!";
                    event.preventDefault();
                }
            }  

            if(name == "" || name == null){
                nameMsg.innerText="Fill Name field!";
                event.preventDefault();
            }else{
                if(nameRegex.test(name)){
                    nameMsg.innerText="";
                }else{
                    nameMsg.innerText="Name was not written correctly!";
                    event.preventDefault();
                }
            }
            if(surname == "" || surname == null){
                surnameMsg.innerText="Fill surname field!";
                event.preventDefault();
            }else{
                if(surnameRegex.test(surname)){
                    surnameMsg.innerText="";
                }else{
                    surnameMsg.innerText="surname was not written correctly!";
                    event.preventDefault();
                }
            }
            if(tel == "" || tel == null || tel <13){
                telMsg.innerText="Fill tel field!";
                event.preventDefault();
            }else{
                if(telRegex.test(tel)){
                    telMsg.innerText="";
                }else{
                    telMsg.innerText="Phonr number was not written correctly!";
                    event.preventDefault();
                }
            }
            
          if(birthday == "" || birthday == null){
                birthdayMsg.innerText="Fill birthday field!";
                event.preventDefault();
            }else{
                birthdayMsg.innerText="Birthday was not written !";
                    event.preventDefault();
               }
            
            

        })
          */
  
            </script>

</body>
</html>