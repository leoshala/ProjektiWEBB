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
</head>
<body>
    <h1>Dashboard</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <TH>SURNAME</TH>
            <th>USERNAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>BIRTHDAY</th>
            <TH>TEL</TH>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>

        <?php

   // include_once '../LoginForma/loginValidate.php';

        include_once '../repository/userRepository.php';

        $userRepository = new UserRepository();

        $users = $userRepository->getAllUsers();

        foreach($users as $user){
            echo
            "
            <tr>
                <td>$user[Id]</td>
                <td>$user[Name]</td>
                <td>$user[Surname]</td>
                <td>$user[Username]</td>
                <td>$user[Email]</td>
                <td>$user[password]</td>
                <td>$user[Birthday]</td>
                <td>$user[Tel]</td>
                <td><a href='edit.php?id=$user[Id]'>Edit</a></td>
                <td><a href='delete.php?id=$user[Id]'>Delete</a></td>
            </tr>
            ";
        }

        ?>
    </table>
</body>
</html>
<?php
}
?>