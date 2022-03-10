<?php

include '../Database/Database.php';

class AuthController
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login($request)
    {
        $query = $this->db->pdo->prepare('SELECT id,name,surname,email,password,birthday,tel,userrole FROM user WHERE email = :email');
        $query->bindParam(':email', $request['email']);
        $query->execute();

        $user = $query->fetch();

        if(count($user) > 0 && password_verify($request['password'], $user['password']) ){
            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['userrole'] = $user['userrole'];

            header("Location: ../LoginForma/About.php");
        }
    }
}
