<?php
require_once __DIR__ . '/Product/Food.php';
class Cart
{
    public $products = [];
    public function addProduct($product)
    {
        if (($product instanceof Product) === false) throw new Exception('Product must be instance of a Products');
        if (in_array($product, $this->products)) throw new Exception(' the product is already in the array ');
        $this->products[] = $product;
    }

    public function removeProduct($product)
    {
        if (!in_array($product, $this->products)) throw new Exception(' the product isn\'t in the array ');
        for ($i = 0; $i <  count($this->products); $i++) {
            if ($product === $this->products[$i]) unset($this->products[$i]);
        }
    }
}

// $cart1 = new Cart;
// var_dump($cart1);

// $cart1->removeProduct(3);
// var_dump($cart1);
