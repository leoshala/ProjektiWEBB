<?php

class User{
    private $id;
    private $name;
    private $surname;
    private $email;
    private $username;
    private $password;
    private $birthday;
    private $tel;
    private $userrole;


    function __construct($id,$name,$surname,$username,$email,$password,$birthday,$tel,$userrole){
            $this->id = $id;
            $this->name = $name;
            $this->surname = $surname;
            $this->username = $username;
            $this->email = $email;      
            $this->password = $password;
            $this->birthday = $birthday;
            $this->tel=$tel;
            $this->userrole=$userrole;
            
    }


    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getSurname(){
        return $this->surname;
    }
    function getEmail(){
        return $this->email;
    }
    function getUsername(){
        return $this->username;
    }
    function getPassword(){
        return $this->password;
    }
    function getBirthday(){
        return $this->birthday;
    }
    function getTel(){
        return $this->tel;
    }
    function getUserRole(){
        return $this->userrole;
    }
}

?>