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

        $statement->execute([$id,$name,$surname,$username,$email,$password,$birthday,$tel]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id,$name,$surname,$email,$username,$password,$birthday,$tel){

            $conn = $this->connection;

            $sql = "UPDATE user SET name=?, surname=?,username=?,email=?,password=?,birthday=?,tel=? WHERE id=?";

            $statement = $conn->prepare($sql);

            $statement->execute([$id,$name,$surname,$username,$email,$password,$birthday,$tel,$id]);
    
            echo "<script>alert('update was successful');</script>";
    
        }

        function deleteUser($id){
            $conn = $this->connection;
    
            $sql = "DELETE FROM user WHERE id=?";
    
            $statement = $conn->prepare($sql);
    
            $statement->execute([$id]);
    
            echo "<script>alert('delete was successful'); </script>";
       } 

}

?>