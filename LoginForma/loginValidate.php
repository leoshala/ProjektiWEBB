<?php

if(isset($_POST['loginBtn'])){
    if(empty($_POST['email']) || empty($_POST['password'])){
        echo "Fill all fields";
    }else{
        $email = $_POST['email'];
        $password = $_POST['password'];





      include_once 'users.php';
  //  include_once '../repository/userRepository.php';
      //  include_once '../view/dashboard.php';

    
        //$users=array();

    //  $userRepository = new UserRepository();

    //  $users = $userRepository->getUserByEmail($email);

    //$email = $_POST['email'];
    //  $password = $_POST['password'];
    //  $userrole = $_POST['userrole'];

  /*  if(empty($user)){
        echo "Username or Password is Incorrect!";
    }else{
        if($user[5]==$password){
            header("location:About.php");
        }else{
            echo "Username or Password is Incorrect";
        }
    }*/


       foreach($users as $user){
            $i=0;
            if($email == $user['email'] && $password == $user['password']){
                echo $email;
                echo $password;
                

                session_start();
                 $_SESSION['email'] = $email;
                 $_SESSION['password'] = $password;
                 $_SESSION['role'] = $user['role'];
                 $_SESSION['username'] = $user['username'];

                 header("location:About.php");
                exit();
            }else{
                echo "incorect email or password";
                if($i == sizeof($users)){

                
                exit();
                }
            }
        }
    }
 /*   include_once '../repository/userRepository.php';

$userEmail = $_GET['email'];
$userPass = $_GET['password'];
$roleUser = $_GET['userrole'];

$userRepository = new UserRepository();

$user = $userRepository->getRole($email ,$userPass,$roleUser);

$user=[$userEmail,$userPass,$roleUser];


    }
}*/


}
?>