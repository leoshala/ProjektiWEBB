<?php

include_once '../repository/coinsRepository.php';

$coinId = $_GET['id'];

$coinRepository = new CoinsRepository();

$coin = $coinRepository->getCoinsById($coinId);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" class="form">
<div class="form2">
    <div class="form1">
    <p>Id:</p>
        <input type="text" name="id.." value="<?= $coin['Id'] ?>" readonly>
        <label style="color: red;" id="nameMsg"></label>
  <p>Name:</p>
        <input type="text" name="name" value="<?= $coin['Name'] ?>" id="name">
        <label style="color: red;" id="nameMsg"></label>
        <p>Price:</p>
        <input type="text" name="price" value="<?= $coin['Price'] ?>" id="surname">
        <label style="color: red;" id="surnameMsg"></label>
        <p>MarcetCap:</p>
        <input type="text" name="marketcap" value="<?= $coin['MarketCap'] ?>" id="surname">
        <label style="color: red;" id="surnameMsg"></label>
        <p>Volume:</p>
        <input type="text" name="volume" value="<?= $coin['Volume'] ?>" id="username">
        <label style="color: red;" id="usernameMsg"></label>
      <p>TotalSupply:</p>
        <input type="text" name="totalsupply" value="<?= $coin['TotalSupply'] ?>" id="email">
        <label style="color: red;" id="EmailMsg"></label>
<br>
        <input type="submit" name="coinRegister" value="Save" id="button1"><br><br>
        </div>
</div>
    </form>

    <?php

       // include_once '../controller/coinregisterController.php';
       if(isset($_POST['coinRegister'])){
        $id = $coin['Id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $marketcap = $_POST['marketcap'];
        $volume = $_POST['volume'];
        $totalsupply = $_POST['totalsupply'];
       
        $coinRepository->updateCoin($id,$name,$price,$marketcap,$volume,$totalsupply);
        header("location:coinNews.php");
       }
       


    ?>
</body>
</html>