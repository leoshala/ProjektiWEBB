<?php
include_once '../repository/coinsRepository.php';
include_once '../models/coins.php';

if(isset($_POST['coinReg'])){
    if(empty($_POST['name']) || empty($_POST['price']) || empty($_POST['marketcap']) || empty($_POST['volume']) ||
    empty($_POST['totalsupply'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $price = $_POST['price'];
        $marketcap = $_POST['marketcap'];
        $volume = $_POST['volume'];
        $totalsupply = $_POST['totalsupply'];
        $id = rand(100,999);
        

        $coins  = new Coins($id,$name,$price,$marketcap,$volume,$totalsupply);
        $coinsRepository = new CoinsRepository();

        $coinsRepository->insertCoins($coins);


    }
}



?>