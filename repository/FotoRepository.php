<?php
include_once '../database/databaseConnection.php';

class FotoRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }


function deletefoto($id){
            $conn = $this->connection;
    
            $sql = "DELETE FROM images WHERE id=?";
    
            $statement = $conn->prepare($sql);
    
            $statement->execute([$id]);
    
            echo "<script>alert('delete was successful'); </script>";
       } 

    }

       ?>