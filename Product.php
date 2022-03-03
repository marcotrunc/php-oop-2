<?php

class Product
{
    public $brand;
    public $title;
    public $description;
    public $price;
    public $discount;
    public $reference_animal;
    public $id;

    public function __construct($brand, $title, $description, $id, $reference_animal, $price, $discount = null)
    {
        $this->brand = $brand;
        $this->title = $title;
        $this->description = $description;
        $this->id = $id;
        $this->reference_animal = $reference_animal;
        $this->price = $price;
        $this->discount = $discount;
    }
}

$product1 = new Product('pippo', 'titolino', '...', 'hgsa55d4a5', 'pesce', 5.49, 20);
$product2 = new Product('ciccio', 'titolone', 'descrizione', 'd654gf65', 'cane', 8.99,);



var_dump($product1);
var_dump($product2);
