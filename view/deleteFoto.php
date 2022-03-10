<?php
    
    $fotoID= $_GET['id'];
    include_once '../repository/FotoRepository.php';

    $FotoRepository = new FotoRepository();

    $FotoRepository->deletefoto($fotoID);

    header("location: ../LoginForma/Insights.php");

?>