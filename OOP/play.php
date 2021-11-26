<?php

require_once  __DIR__ . '/classes/Ship.php';

function printShipSummary($someShip){

   echo 'Ship name: ' .$someShip->name;
    echo '<hr />';
    $someShip->sayHello();
    echo '<hr />';
    echo $someShip->getName();
    echo '<hr />';
    var_dump($someShip->strength);
    echo '<hr />';
    echo $someShip->getNameAndSpecs(true);
}

$myShip = new Ship();
$myShip->name = 'Jedi Starship';
$myShip->strength = 20;

$otherShip = new Ship();
$otherShip->name = 'Imperial Shuttle';
$otherShip->strength = 50;
$otherShip->weaponPower = 10;

printShipSummary($myShip);
echo '<hr />';
printShipSummary($otherShip);

// strength comparison
echo'<hr />';
if ($myShip->strengthComparator($otherShip)) {
    echo $otherShip->name . ' has more strength ';
} else {
    echo $myShip->name .' has more strength';
}
