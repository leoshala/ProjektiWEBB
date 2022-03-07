<?php
 if(isset($_POST['loginBtn'])){
    if(empty($_POST['email']) || empty($_POST['password'])){
        echo "Fill all fields";
    }else{
        $email = $_POST['email'];
        $password = $_POST['password'];
       /* try {
            $pdo = new PDO("mysql:host=localhost;dbname=oleks","root","");
        }
        catch(PDOException $pdo){
            die("Unsuccessful connection");
        }

        if(isset($_POST['loginBtn'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $message = '';
    
            $query = $pdo->prepare('SELECT * FROM user WHERE email = :email');
            $query->bindParam(':email',$email);
            $query->execute();
    
            $user = $query->fetch();
            if($user > 0 && password_verify($password, $user['password'])) {
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['surname'] = $user['surname'];
                $_SESSION['permission'] = $user['permission'];
    
                header("Location: About.php");
    
            } else {
                $message = "Sorry, those credentials do not match!";
            }
        }*/
    


      include_once 'users.php';
 //   include_once '../repository/userRepository.php';
      //  include_once '../view/dashboard.php';

    
        //$users=array();

   //   $userRepository = new UserRepository();

    //  $users = $userRepository->getUserByEmail($email.$password);

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


    if (is_array($users) || is_object($users)){
   
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