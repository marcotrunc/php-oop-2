<?php
require_once __DIR__ . '/Product.php';
class Game extends Product
{
    public $purpose;
    public $material;

    public function __construct($brand, $title, $description, $id, $reference_animal, $price, $discount, $purpose, $material)
    {
        parent::__construct($brand, $title, $description, $id, $reference_animal, $price, $discount);
        $this->setPurpose($purpose);
        $this->setMaterial($material);
    }
    // purpose
    public function getPurpose()
    {
        return $this->purpose;
    }
    public function setPurpose($purpose)
    {
        if (!is_string($purpose)) return false;
        return $this->purpose = $purpose;
    }
    // Material
    function getMaterial()
    {
        return $this->material;
    }
    public function setMaterial($material)
    {
        if (!is_string($material)) return false;
        return $this->material = $material;
    }
}

$game1 = new Game('Stuzzy', 'Stuzzy Dog Monoproteico', 'Stuzzy Monoproteico al Maiale cibo umido per cani soggetti ad intolleranze alimentari.', '22s', 'dog', 4.10, 27, 'training', 'rubber');

var_dump($game1);
echo $game1->getPurpose();
echo $game1->getMaterial();
echo $game1->getBrandName();
