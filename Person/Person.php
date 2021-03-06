<?php
require_once __DIR__ . '/../Cart.php';
class Person
{
    public $name;
    public $last_name;
    public $date;
    public $address;
    public $cart;

    public function __construct($name, $last_name, $date, $address, $cart)
    {
        $this->setName($name);
        $this->setlastName($last_name);
        $this->setDate($date);
        $this->address = $address;
        $this->setCart($cart);
    }
    // Name
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        if (!is_string($name) || preg_match('~[0-9]+~', $name)) return false;
        return $this->name = $name;
    }
    // LastName
    public function getLastName()
    {
        return $this->last_name;
    }
    public function setLastName($last_name)
    {
        if (!is_string($last_name) || preg_match('~[0-9]+~', $last_name)) return false;
        return $this->last_name = $last_name;
    }
    // date
    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        if (!preg_match('~[0-9]+~', $date)) return false; //Da migliorare
        return $this->date = $date;
    }
    // Address
    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress($address)
    {
        if (!is_string($address)) return false; //
        return $this->address = $address;
    }
    // Cart
    public function setCart($cart)
    {
        if (!($cart instanceof Cart)) throw new Exception('$cart must be instance of Cart');
        return $this->cart = $cart;
    }
}
