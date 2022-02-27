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
        $username = $user->getUsername();
        $email = $user->getEmail();   
        $password = $user->getPassword();
        $birthday = $user->getBirthday();
        $tel = $user->getTel();
        $userrole = $user->getUserRole();

        $sql = "INSERT INTO user (id,name,surname,username,email,password,birthday,tel,userrole) VALUES (?,?,?,?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$name,$surname,$username,$email,$password,$birthday,$tel,$userrole]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUsersRole($email,$password){

        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";

        $statement = $conn->query($sql);

        $users = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $users;


    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id,$name,$surname,$username,$email,$password,$birthday,$tel,$userrole){

            $conn = $this->connection;

            $sql = "UPDATE user SET name=?, surname=?,username=?,email=?,password=?,birthday=?,tel=?,userrole=? WHERE id=?";

            $statement = $conn->prepare($sql);

            $statement->execute([$name,$surname,$username,$email,$password,$birthday,$tel,$userrole,$id]);
    
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