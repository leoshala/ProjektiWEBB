<?php

class Coins{
    private $id;
    private $name;
    private $price;
    private $marketcap;
    private $volume;
    private $totalsupply;



    function __construct($id,$name,$price,$marketcap,$volume,$totalsupply){
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->marketcap = $marketcap;
            $this->volume = $volume;
            $this->totalsupply = $totalsupply;
       
    }


    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getPrice(){
        return $this->price;
    }
    function getMarcetCap(){
        return $this->marketcap;
    }
    function getVolume(){
        return $this->volume;
    }
    function getTotalSupply(){
        return $this->totalsupply;
    }
}

?>