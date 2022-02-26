<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="form">
<div class="form2">
    <div class="form1">
         <p>Name:</p>
        <input type="text" name="name" placeholder="name..." id="name">
        <label style="color: red;" id="nameMsg"></label>
        <p>Price:</p>
        <input type="text" name="price" placeholder="price..." id="surname">
        <label style="color: red;" id="surnameMsg"></label>
        <p>MarcetCap:</p>
        <input type="text" name="marketcap" placeholder="marketcap..." id="surname">
        <label style="color: red;" id="surnameMsg"></label>
        <p>Volume:</p>
        <input type="text" name="volume" placeholder="volume..." id="username">
        <label style="color: red;" id="usernameMsg"></label>
      <p>TotalSupply:</p>
        <input type="text" name="totalsupply" placeholder="totalsupply..." id="email">
        <label style="color: red;" id="EmailMsg"></label>
<br>
        <input type="submit" name="coinReg" value="register" id="button1"><br><br>
        </div>
</div>
    </form>

    <?php

        include_once '../controller/coinregisterController.php';

    ?>
</body>
</html>