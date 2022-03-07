<?php
require_once __DIR__ . '/Person/Person.php';
require_once __DIR__ . '/Cart.php';
require_once __DIR__ . '/Product/Toys.php';
class Order
{
    public $customer;
    public $address;
    public $cart;

    public function __construct($customer, $address, $products)
    {
        $this->setCustomer($customer);
        $this->setAddress($address);
        $this->setProducts($products);
    }
    public function setCustomer($customer)
    {
        return $this->customer = $customer;
    }
    public function setAddress($address)
    {
        return $this->address = $address;
    }
    public function setProducts($cart)
    {
        if (!($cart instanceof Cart)) throw new Exception('$customer must be instance of Cart');
        return $this->cart = $cart;
    }
    public function getTotal($cart)
    {
        $orders = $cart->products;
        $sum = 0;
        for ($i = 0; $i < count($orders); $i++) {
            $sum += $cart->getProducts($i)->getPrice();
        }
        return 'Il Totale da pagare è €' . $sum;
    }
}
$game1 = new Toys('Stuzzy', 'Stuzzy Dog Monoproteico', 'Stuzzy Monoproteico al Maiale cibo umido per cani soggetti ad intolleranze alimentari.', '22s', 'dog', 4.10, 10, 27, 'training', 'rubber');
$game2 = new Toys('ciccio', 'Stuzzy Dog Monoproteico', 'Stuzzy Monoproteico al Maiale cibo umido per cani soggetti ad intolleranze alimentari.', '22s', 'dog', 4.10, 10, 27, 'training', 'rubber');

$cart1 = new Cart;
$cart1->addProduct($game1);
$cart1->addProduct($game2);

$persona1 = new Person('Marco', 'Truncellito', '29-08-1995', 'Loc.Anglona, Tursi (MT)', $cart1);
$persona1->getAddress();



$order1 = new Order($persona1, $persona1->getAddress(), $cart1);
var_dump($cart1);

echo $order1->getTotal($cart1);
