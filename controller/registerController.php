<?php

include_once '../repository/userRepository.php';
include_once '../models/user.php';

    if(isset($_POST['registerBtn'])){
        if(empty($_POST['name']) || empty($_POST['surname']) || 
        empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) 
       /* empty($_POST['birthday']) || empty($_POST['tel'])*/){
            echo "Fill all Fiellds!";
        }else{
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $username = $_POST['username'];
            $email = $_POST['email']; 
            $password = $_POST['password'];
           // $birthday = $_POST['birthday'];
          //  $tel = $_POST['tel'];
            $id = $username.rand(100,999);

        $user = new User($id,$name,$surname,$username,$email,$password/*$birthday,$tel*/);
            $userRepository = new UserRepository();

            $userRepository->insertUser($user);
        }
    }

?>