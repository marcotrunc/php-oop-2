<?php
require_once __DIR__ . '/Product.php';
class Drug extends Product
{
    public $quantity;
    public $drug_for;

    public function __construct($brand, $title, $description, $id, $reference_animal, $price, $discount, $quantity, $drug_for)
    {
        parent::__construct($brand, $title, $description, $id, $reference_animal, $price, $discount);
        $this->setQuantity($quantity);
        $this->setDrugFor($drug_for);
    }
    // Quantity
    public function getQuantity()
    {
        return 'ml' . $this->quantity;
    }
    public function setQuantity($quantity)
    {
        if (!is_numeric($quantity)) return false;
        return $this->quantity = $quantity;
    }
    //Drug For
    public function getDrugFor()
    {
        return $this->drug_for;
    }
    public function setDrugFor($drug_for)
    {
        if (!is_string($drug_for)) return false;
        return $this->drug_for = $drug_for;
    }
}

$food1 = new Drug('Stuzzy', 'Stuzzy Dog Monoproteico', 'Stuzzy Monoproteico al Maiale cibo umido per cani soggetti ad intolleranze alimentari.', '22s', 'dog', 4.10, 27, 250, 'Calm');

var_dump($food1);
echo $food1->getQuantity();
echo $food1->getDrugFor();
