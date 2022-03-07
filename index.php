<?php
require_once __DIR__ . '/Person/Person.php';
require_once __DIR__ . '/Cart.php';
require_once __DIR__ . '/Product/Toys.php';



$game1 = new Game('Stuzzy', 'Stuzzy Dog Monoproteico', 'Stuzzy Monoproteico al Maiale cibo umido per cani soggetti ad intolleranze alimentari.', '22s', 'dog', 4.10, 10, 27, 'training', 'rubber');
$game2 = new Game('ciccio', 'Stuzzy Dog Monoproteico', 'Stuzzy Monoproteico al Maiale cibo umido per cani soggetti ad intolleranze alimentari.', '22s', 'dog', 4.10, 10, 27, 'training', 'rubber');

$cart1 = new Cart;

$cart1->addProduct($game1);
$cart1->addProduct($game2);


$persona1 = new Person('Marco', 'Truncellito', '29-08-1995', 'Loc.Anglona, Tursi (MT)', $cart1);
var_dump($persona1);
?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   <form action="Subscrited.php" method="GET">
        <label for="name">Inserisci Nome</label>
        <input type="text" name="name" id="name"> <br />
        <label for="last-name">Inserisci Cognome</label>
        <input type="text" name="last_name" id="last-name"><br />
        <label for="date">Inserisci Data di nascita</label>
        <input type="text" name="date" id="date"><br />
        <label for="address">Inserisci Indirizzo</label>
        <input type="text" name="address" id="address"><br />

        <button type="submit">Procedi con l'acquisto</button>
    </form> 



</body>

</html> -->