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
    <link rel="stylesheet" href="RegisterForm.css">
</head>
<body>
<form action="../LoginForma/CoinatEri.php" method="post" class="form">
<div class="form2">
    <div class="form1">
         <p>Name:</p>
        <input type="text" name="name" placeholder="name..." id="name">
        <label style="color: red;" id="nameMsg"></label>
        <p>Price:</p>
        <input type="text" name="price" placeholder="price..." id="number" >
        <label style="color: red;" id="NumMsg"></label>
        <p>MarcetCap:</p>
        <input type="text" name="marketcap" placeholder="marketcap..." id="number1" >
        <label style="color: red;" id="NumMsg1"></label>
        <p>Volume:</p>
        <input type="text" name="volume" placeholder="volume..." id="number2" >
        <label style="color: red;" id="NumMsg2"></label>
      <p>TotalSupply:</p>
        <input type="text" name="totalsupply" placeholder="totalsupply..." id="number3" >
        <label style="color: red;" id="NumMsg3"></label>
<br>
        <input type="submit" name="coinReg" value="register" id="button1"><br><br>
        </div>
</div>
    </form>

    <?php

        include_once '../controller/coinregisterController.php';

    ?>

<script class="script">
  var button = document.getElementById("button1");

   var nameMsg = document.getElementById("nameMsg");

   var NumMsg = document.getElementById("NumMsg");

   var NumMsg1 = document.getElementById("NumMsg1");

   var NumMsg2 = document.getElementById("NumMsg2");

   var NumMsg3 = document.getElementById("NumMsg3");

   var nameRegex = /[A-Za-z]/;

   var NumRegex = /[0-9]/;



   button.addEventListener("click",function(event){
            var name= document.getElementById("name").value;
            var number = document.getElementById("number").value;

            var number1 = document.getElementById("number1").value;
            var number2 = document.getElementById("number2").value;
            var number3 = document.getElementById("number3").value;



           
     

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
            if(number1 == "" || number1 == null || number1 <20){
                NumMsg1.innerText="Fill Number field!";
                event.preventDefault();
            }else{
                if(NumMsg1.test(number1)){
                    NumMsg1.innerText="";
                }else{
                    NumMsg1.innerText=" number was not written correctly!";
                    event.preventDefault();
                }
            }
            if(number == "" || number == null || number <20){
                NumMsg.innerText="Fill Number field!";
                event.preventDefault();
            }else{
                if(NumMsg.test(number)){
                    NumMsg.innerText="";
                }else{
                    NumMsg.innerText=" number was not written correctly!";
                    event.preventDefault();
                }
            }

            if(number2 == "" || number2 == null || number2 <20){
                NumMsg2.innerText="Fill Number field!";
                event.preventDefault();
            }else{
                if(NumMsg2.test(number2)){
                    NumMsg2.innerText="";
                }else{
                    NumMsg2.innerText=" number was not written correctly!";
                    event.preventDefault();
                }
            }

            if(number3 == "" || number3 == null || number3 <20){
                NumMsg3.innerText="Fill Number field!";
                event.preventDefault();
            }else{
                if(NumMsg3.test(number3)){
                    NumMsg3.innerText="";
                }else{
                    NumMsg3.innerText=" number was not written correctly!";
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