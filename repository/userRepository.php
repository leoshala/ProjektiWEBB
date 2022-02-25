<?php
include_once '../Database/databaseConnection.php';

    class UserRepository{
        private $connection;

        function __construct(){
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }


                   // $user
        function insertUser($user){

            $conn = $this->connection;

            $id = $user->getId();
            $name = $user->getName();
            $surname =$user->getSurname();
            $username = $user->getUsername();
            $email = $user->getEmail();
            $password = $user->getPassword();
            $birthday = $user->getBirthday();
            $tel = $user->getTel();


            $sql = "INSERT INTO user (id,name,surname,username,email,password,birthday,tel) VALUES (?,?,?,?,?,?,?,?)";
        
            $statement = $conn->prepare($sql);

     //   $statement->execute([$id,$name,$surname,$username,$email,$password,$birthday,$tel]);

    // $statement->execute(['123','leo','shala','leoshala','leon@hasf.com','leo1234','2000/05/05','04912412']);
        
            echo "<script> alert('User u shtua me sukses');</script>";
        }
    }

   // $userRepo = new UserRepository();

   // $userRepo->insertUser();

?>