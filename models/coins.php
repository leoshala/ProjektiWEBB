<?php

class Coins{
    private $id;
    private $name;
    private $marcetcap;
    private $volume;
    private $totalsupply;



    function __construct($id,$name,$marcetcap,$volume,$totalsupply){
            $this->id = $id;
            $this->name = $name;
            $this->marcetcap = $marcetcap;
            $this->volume = $volume;
            $this->totalsupply = $totalsupply;
       
    }


    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getMarcetCap(){
        return $this->marcetcap;
    }
    function getVolume(){
        return $this->volume;
    }
    function getTotalSupply(){
        return $this->totalsupply;
    }
}

?>