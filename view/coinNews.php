<?php
session_start();

if(!isset($_SESSION['email'])){
    header("location: LoginForma/LogIn.php");
}else{
    if($_SESSION['role'] != "admin"){
        header("location: LoginForma/About.php");
    }


?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="coinnewss.css">
</head>
<body>
    
<h1>Coin News</h1>


<table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>MarketCap</th>
            <th>Volume</th>
            <th>Total Supply</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>

        <tbody>
        <?php

// include_once '../LoginForma/loginValidate.php';

     include_once '../repository/coinsRepository.php';

     $coinsRepository = new CoinsRepository();

     $coins = $coinsRepository->getAllCoins();

     foreach($coins as $coin){
         echo
         "
         <tr>
             <td>$coin[Id]</td>
             <td>$coin[Name]</td>
             <td>$coin[Price]</td>
             <td>$coin[MarketCap]</td>
             <td>$coin[Volume]</td>
             <td>$coin[TotalSupply]</td>
   
             <td><a href='editcoin.php?id=$coin[Id]'>Edit</a></td>
             <td><a href='deleteCoin.php?id=$coin[Id]'>Delete</a></td>
         </tr>
         ";
     }

     ?>
        </tbody>

<!--<form method="post" action=" /*echo $_SERVER['PHP_SELF'];*/">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }

*/

-->



</table>

</body>
</html>
<?php
}
?>