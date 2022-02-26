<?php
include_once '../repository/coinsRepository.php';
include_once '../models/coins.php';

if(isset($_POST['coinReg'])){
    if(empty($_POST['name']) || empty($_POST['marcetcap']) || empty($_POST['volume']) ||
    empty($_POST['totalsupply'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $marcetcap = $_POST['marcetcap'];
        $volume = $_POST['volume'];
        $totalsupply = $_POST['totalsupply'];
        $id = rand(100,999);
        

        $coins  = new Coins($id,$name,$marcetcap,$volume,$totalsupply);
        $coinsRepository = new CoinsRepository();

        $coinsRepository->insertCoins($coins);


    }
}



?>