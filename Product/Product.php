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
    public $quantity;

    public function __construct($brand, $title, $description, $id, $reference_animal, $price, $quantity, $discount)
    {
        $this->setBrandName($brand);
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setId($id);
        $this->setAnimal($reference_animal);
        $this->setDiscount($discount);
        $this->setPrice($price);
        $this->setQuantity($quantity);
    }
    // Brand Name
    public function getBrandName()
    {
        return $this->brand;
    }
    public function setBrandName($brand)
    {
        if (!is_string($brand)) return false;
        return $this->brand = $brand;
    }

    // Title
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        if (!is_string($title)) return false;
        return $this->title = $title;
    }

    //Description
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        if (!is_string($description)) return false;
        return $this->description = $description;
    }

    // Id
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        if (!is_string($id)) return false;
        return $this->id = $id;
    }

    //Animal
    public function getAnimal()
    {
        return $this->reference_animal;
    }
    public function setAnimal($reference_animal)
    {
        if (!is_string($reference_animal)) return false;
        return  $this->reference_animal = $reference_animal;
    }

    //Discount
    public function getDiscount()
    {
        return '%' . $this->discount;
    }
    public function setDiscount($discount)
    {
        if (!is_numeric($discount)) return false;
        return $this->discount = $discount;
    }

    //Price
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        if (!is_numeric($price)) return false;
        $perc = $this->discount;
        $final_price = $price - ($price * ($perc / 100));
        return $this->price = round($final_price, 2);
    }
    //Quantity
    public function setQuantity($quantity)
    {
        if (!is_numeric($quantity)) return false;
        return $this->quantity = $quantity;
    }
}
