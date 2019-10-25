<?php

class Sandwitch {

    private $data = [];
/**
 * 
 * @param array $data
 */
    public function __construct(array $data = null) {

        if ($data) {
            $this->setData($data);
        } else {
            $this->data = [
                'name' => null,
                'price' => null,
                'vegan' => null,
                'image' => null
            ];
        }
    }
/**
 * 
 * @return array
 */
    public function getData(): array {
        return [
            'name' => $this->getName(),
            'price' => $this->getPrice(),
            'vegan' => $this->getVegan(),
            'image' => $this->getImage()
        ];
    }
/**
 * 
 * @param array $array
 */
    public function setData(array $array) {
        $this->setName($array['name'] ?? null);
        $this->setName($array['price'] ?? null);
        $this->setName($array['vegan'] ?? null);
        $this->setName($array['name'] ?? null);
    }

//-------------------------------------------- 
/**
 * 
 * @param string $name
 */
    public function setName(string $name) {
        $this->data['name'] = $name;
    }
/**
 * 
 * @return string|null
 */
    public function getName(): ?string {
        return $this->data['name'];
    }

//---------------------------------------------- 
/**
 * 
 * @param float $price
 */
    public function setPrice(float $price) {
        $this->data['price'] = $price;
    }
/**
 * 
 * @return float|null
 */
    public function getPrice(): ?float {
        return $this->data['price'];
    }

//-----------------------------------------------  
/**
 * 
 * @param bool $vegan
 */
    public function setVegan(bool $vegan) {
        $this->data['vegan'] = $vegan;
    }
/**
 * 
 * @return bool|null
 */
    public function getVegan(): ?bool {
        return $this->data['vegan'];
    }

//-----------------------------------------------
/**
 * 
 * @param string $url
 */
    public function setImage(string $url) {
        $this->data['url'] = $url;
    }
/**
 * 
 * @return string|null
 */
    public function getImage(): ?string {
        return $this->data['url'];
    }

//---------------------------------------------
}
