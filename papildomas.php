<?php

class Persson {
    
    public $ugis;
    public $vardas;
    private $asmens_kodas;
    
    
    public function __construct($vardas, $centimetrai) {
        $this->vardas = $vardas;
        $this->ugis = $centimetrai;
        $this->asmens_kodas = rand(1000, 9999);
        $this->kalbeti();
    }
    
    private function kalbeti(){
        print"Labas, aš $this->vardas, mano ūgis $this->ugis!";
    }
    
       public function pasakykVarda() {
        return $this->vardas;
    } 
    
}

$zmogus_1 = new Persson('Arnas', 186);
var_dump($zmogus_1);

$zmogus_2 = new Persson('Rasa', 190);
var_dump($zmogus_2);

print $zmogus_1->pasakykVarda();