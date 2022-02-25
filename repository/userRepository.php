<?php 
include_once '../database/databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }


    function insertUser($user){

        $conn = $this->connection;

        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $username = $user->getUsername();
        $password = $user->getPassword();
        $birthday = $user->getBirthday();
        $tel = $user->getTel();

        $sql = "INSERT INTO user (id,name,surname,email,username,password,birthday,tel) VALUES (?,?,?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$name,$surname,$email,$username,$password,$birthday,$tel]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

}

?>