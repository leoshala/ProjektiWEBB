<?php
    
    $coinId= $_GET['id'];
    include_once '../repository/coinsRepository.php';

    $coinsRepository = new CoinsRepository();

    $coinsRepository->deleteCoin($coinId);

    header("location:coinNews.php");

?>