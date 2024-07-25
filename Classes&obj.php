<?php

class Kabeer {
    public $name = "kabeeer";
    public $price = 20;
    public $random = "Calling";

    public function priceAsCurrency(){
        $accessing = $this->price;
        $callingR = $this->random;
        return $accessing;
        // echo $callingR;
        
    }
}

// $kabeerObject = new Kabeer();
// echo $kabeerObject->name = "altering the value";
// $accessingP = new Kabeer();
// echo $accessingP->price  

$kabeer = new Kabeer();
echo $kabeer->priceAsCurrency(); 
var_dump($kabeer). PHP_EOL;