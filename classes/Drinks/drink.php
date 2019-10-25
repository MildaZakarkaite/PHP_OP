<?php

class Drink {
    
    private $data;
/**
 * 
 */
    public function __construct(array $data = null) {
        if ($data == null) {
            $this->data['name'] = null;
            $this->data['amount_ml'] = null;
            $this->data['abarot'] = null;
            $this->data['image'] = null;
        } else {
            $this->setData($data);
        }
    }
/**
 * Gets all data as array
 * @return array
 */    
    public function getData(): array {
        return [
           'id' => $this->getID(),
           'name' => $this->getName(),
           'amount_ml' => $this->getAmount(),
           'abarot' => $this->getAbarot(),
           'url' => $this->getImage()
        ];
    }
/**
 * 
 */        
    public function setData(array $array) {
        if (isset($array['id'])) {
            $this->setID($array['id']);
        } else {
            $this->data['id'] = null;
        }
      $this->setName($array['name'] ?? null);
      $this->setAmount($array['name'] ?? null);
    }
    
//-------------------------------------------- 
/**
 * 
 */
    public function setName(string $name) {
         $this->data['name'] = $name;
    }
/**
 * 
 */    
    public function getName() {
        return $this->data['name'];
    }
    
//---------------------------------------------- 
/**
 * 
 */
    public function setAmount(int $amount_ml) {
         $this->data['amount_ml'] = $amount_ml;
    }
/**
 * 
 */    
    public function getAmount() {
        return $this->data['amount_ml'];
    }
//----------------------------------------------- 
/**
 * 
 */
    public function setAbarot(float $abarot) {
         $this->data['abarot'] = $abarot;
    }
/**
 * 
 */    
    public function getAbarot() {
        return $this->data['abarot'];
    }
//-----------------------------------------------
/**
 * 
 */
     public function setImage(string $url) {
         $this->data['url'] = $url;
    }
/**
 * 
 */
    public function getImage() {
        return $this->data['url'];
    }
//----------------------------------------------
}

