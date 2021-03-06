<?php
require_once __DIR__ . '/Product.php';
class Food extends Product
{
    public $content;
    public $type_food;

    public function __construct($brand, $title, $description, $id, $reference_animal, $price, $quantity, $discount, $content, $type_food)
    {
        parent::__construct($brand, $title, $description, $id, $reference_animal, $price, $quantity, $discount);
        $this->setContent($content);
        $this->setType($type_food);
    }
    // Content
    public function getContent()
    {
        return $this->content;
    }
    public function setContent($content)
    {
        if (!is_string($content)) return false;
        return $this->content = $content;
    }
    //Type
    public function getType()
    {
        return $this->type_food;
    }
    public function setType($type_food)
    {
        if (!is_string($type_food)) return false;
        return $this->type_food = $type_food;
    }
}

$food1 = new Food('Stuzzy', 'Stuzzy Dog Monoproteico', 'Stuzzy Monoproteico al Maiale cibo umido per cani soggetti ad intolleranze alimentari.', '22s', 'dog', 4.10, 10, 27, 'Pork', 'wet Food');
$food2 = new Food('Ciccio', 'pippo', 'pluto', '54', 'cat', 5.10, 20, 33, 'Pork', 'wet Food');
