<?php

$userId = $_GET['id'];
include_once '../repository/userRepository.php';


$userRepository = new UserRepository();

$userRepository->deleteUser($userId);

header("location:dashboard.php");


?>

<?php
    
    $coinId= $_GET['id'];
    include_once '../repository/coinsRepository.php';

    $coinsRepository = new CoinsRepository();

    $coinsRepository->deleteCoin($coinId);

    header("location:coinNews.php");

?>