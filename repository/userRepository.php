<?php
include_once '../Database/databaseConnection.php';

    class UserRepository{
        private $connection;

        function __construct(){
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }



        function insertUser(){

            $conn = $this->connection;

            $sql = "INSERT INTO user (id,name,surname,email,username,password,birthday,tel) VALUES (?,?,?,?,?,?,?,?)";
        
            $statement = $conn->prepare($sql);

        $statement->execute(['1111','leo','shala','leoshala@gmail.com','Leoshala','Leo1234','2001/01/02','049123456']);
        
            echo "<script> alert('User u shtua me sukses');</script>";
        }
    }

    $userRepo = new UserRepository;

    $userRepo->insertUser();

?>