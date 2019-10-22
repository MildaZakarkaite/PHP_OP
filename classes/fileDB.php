<?php

class Car {
    private $marke;
    private $fuel;
    
    public function __construct($marke) {
        $this->marke = $marke;
        $this->fuel = 0;
    }
    
    private function addFuel($amount) {
        $this->fuel += $amount;
    }
    
    public function addABitOfFuel() {
        $this->addFuel(1);
    }
}

$fiat = new Car('Fiat');
$fiat->addABitOfFuel();
//$fiat->marke = 'Fiat';
var_dump($fiat);

$kia = new Car('Kia');
$kia->addABitOfFuel();
var_dump($kia);