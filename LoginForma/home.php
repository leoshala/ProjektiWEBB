<?php
$hide="";
session_start();
if(!isset($_SESSION['email'])){
    header("location:LogIn.php");
}else{
    if($_SESSION['role'] == "admin" ){
        $hide = "";
    }else{
        $hide = "hide";
    }


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hide{
            display:none;
        }
    </style>
</head>
<body>
    <h1>Home</h1>
    <a href="logout.php">Log out</a>
    <a href="dashboard.php" class="<?php echo $hide ?>">Dashboard</a>
    <?php
    echo "Email: ".$_SESSION['email'];
    ?>
</body>
</html>

<?php
}
?>