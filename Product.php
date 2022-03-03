<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class Product
{
    public $brand;
    public $title;
    public $description;
    public $price;
    public $discount;
    public $reference_animal;
    public $id;

    public function __construct($brand, $title, $description, $id, $reference_animal, $price, $discount)
    {
        $this->setBrandName($brand);
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setId($id);
        $this->reference_animal = $reference_animal;
        $this->setPrice($price);
        $this->setDiscount($discount);
    }

    public function setBrandName($brand)
    {
        if (!is_string($brand)) return false;
        return $this->brand = $brand;
    }

    public function setTitle($title)
    {
        if (!is_string($title)) return false;
        return $this->title = $title;
    }

    public function setDescription($description)
    {
        if (!is_string($description)) return false;
        return $this->description = $description;
    }

    public function setId($id)
    {
        if (!is_string($id)) return false;
        return $this->id = $id;
    }

    public function setDiscount($discount)
    {
        if (!is_numeric($discount)) return false;
        return $this->discount = $discount;
    }
    public function setPrice($price)
    {
        if (!is_numeric($price)) return false;
        $perc = $this->discount;
        $final_price = $price - ($price * ($perc / 100));
        return $this->price = $final_price;
    }
}

$product1 = new Product('dsas', 'titolino', '...', 'hgsa55d4a5', 'pesce', 100, 20);
$product2 = new Product('dsadsa', 'titolone', 'descrizione', 'd654gf65', 'cane', 8.99, 10);



var_dump($product1);
var_dump($product2);
