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

        $id = $coins->getId();
        $name = $coins->getName();
        $price = $coins->getPrice();
        $marketcap = $coins->getMarcetCap();
        $volume = $coins->getVolume();
        $totalsupply = $coins->getTotalSupply();   
 

        $sql = "INSERT INTO coins (id,name,price,marketcap,volume,totalsupply) VALUES (?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$name,$price,$marketcap,$volume,$totalsupply]);

       // $statement->execute(['33','btc','21354','23512','346154','34165134']);

        echo "<script> alert('coin has been inserted successfuly!'); </script>";

    }

//$coinsrepo = new CoinsRepository;

//$coinsrepo->insertCoins();

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

    function updateCoin($id,$name,$price,$marketcap,$volume,$totalsupply){

            $conn = $this->connection;

            $sql = "UPDATE coins SET name=?,price=?, marketcap=?,volume=?,totalsupply=? WHERE id=?";

            $statement = $conn->prepare($sql);

            $statement->execute([$name,$price,$marketcap,$volume,$totalsupply,$id]);
    
            echo "<script>alert('update was successful');</script>";
    
        }
        

        function deleteCoin($id){
            $conn = $this->connection;
    
            $sql = "DELETE FROM coins WHERE id=?";
    
            $statement = $conn->prepare($sql);
    
            $statement->execute([$id]);
    
            echo "<script>alert('delete was successful'); </script>";
       } 

}


?>