<?php
require_once __DIR__ . '/Person.php';
require_once __DIR__ . '../Database/Database.php';
class Subscrited extends Person
{
    public $username;
    public $password;
    public $id;
    public $num_card;

    public function __construct($name, $last_name, $date, $address, $userName, $password, $id, $num_card)
    {
        parent::__construct($name, $last_name, $date, $address);
        $this->setUsername($userName);
        $this->setPassword($password);
        $this->setId($id);
        $this->setNumCard($num_card);
    }
    // UserName
    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username)
    {
        if (!is_string($username)) return false; //
        return $this->username = $username;
    }
    // Password
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        if (!is_string($password)) return false; //
        return $this->password = $password;
    }
    //Id
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        if (!is_string($id)) return false; //
        return $this->id = $id;
    }
    // numCard
    public function getNumCard()
    {
        return $this->num_Card;
    }
    public function setNumCard($num_Card)
    {
        if (!is_string($num_Card)) return false; //
        return $this->numCard = $num_Card;
    }
}

// $subscrited1 = new Subscrited('Giovanni', 'Verdi', '12/04/1996', 'Via ags, Milano, 45', 'gioV', '1234', '05', '1515561616165');
// $subscrited2 = new Subscrited('Gio', 'Verdi', '12/04/1996', 'Via ags, Milano, 45', 'ciccioV', '1234', '05', '1515561616165');

// var_dump($subscrited1);




// //if the user logs in with username
// function isSubscrited($database, $sub)
// {
//     $registered = false;
//     foreach ($database as $customer) {
//         if ($sub->getUsername() === $customer['user_name'] && $sub->getPassword() === $customer['password'])  $registered = true;
//     }
//     return $registered;
// }
