<?php 
include_once '../database/databaseConnection.php';

class CoinsRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }


    function insertCoins($coins){

        $conn = $this->connection;

        $id = $user->getId();
        $name = $user->getName();
        $marcetcap = $user->getMarcetCap();
        $volume = $user->getVolume();
        $totalsupply = $user->getTotalSupply();   
 

        $sql = "INSERT INTO coins (id,name,marcetcap,volume,totalsupply) VALUES (?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$name,$marcetcap,$volume,$totalsupply]);

        echo "<script> alert('coin has been inserted successfuly!'); </script>";

    }

    function getAllCoins(){
        $conn = $this->connection;

        $sql = "SELECT * FROM coins";

        $statement = $conn->query($sql);
        $coins = $statement->fetchAll();

        return $coins;
    }

    function getCoinsById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM coins WHERE id='$id'";

        $statement = $conn->query($sql);
        $coin = $statement->fetch();

        return $coin;
    }

    function updateUser($id,$name,$marcetcap,$volume,$totalsupply){

            $conn = $this->connection;

            $sql = "UPDATE coins SET name=?, marcetcap=?,volume=?,totalsupply=? WHERE id=?";

            $statement = $conn->prepare($sql);

            $statement->execute([$name,$marcetcap,$volume,$totalsupply,$id]);
    
            echo "<script>alert('update was successful');</script>";
    
        }
        

        function deleteUser($id){
            $conn = $this->connection;
    
            $sql = "DELETE FROM coins WHERE id=?";
    
            $statement = $conn->prepare($sql);
    
            $statement->execute([$id]);
    
            echo "<script>alert('delete was successful'); </script>";
       } 

}

?>