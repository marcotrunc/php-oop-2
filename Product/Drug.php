<?php
require_once __DIR__ . '/Product.php';
class Drug extends Product
{
    public $volume;
    public $drug_for;

    public function __construct($brand, $title, $description, $id, $reference_animal, $price, $discount, $volume, $drug_for)
    {
        parent::__construct($brand, $title, $description, $id, $reference_animal, $price, $discount);
        $this->setvolume($volume);
        $this->setDrugFor($drug_for);
    }
    // volume
    public function getVolume()
    {
        return 'ml' . $this->volume;
    }
    public function setVolume($volume)
    {
        if (!is_numeric($volume)) return false;
        return $this->volume = $volume;
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

$food1 = new Drug('Stuzzy', 'Stuzzy Dog Monoproteico', 'Stuzzy Monoproteico al Maiale cibo umido per cani soggetti ad intolleranze alimentari.', '22', 'dog', 4.10, 27, 250, 'Calm');

var_dump($food1);
echo $food1->getVolume();
echo $food1->getDrugFor();
