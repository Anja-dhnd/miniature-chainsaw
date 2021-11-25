<?php

class Ship
{
    public $name;
    public $weaponPower = 0;
    public $jediFactor = 0;
    public $strength = 0;

    public function sayHello()
    {
        echo 'Hello!';
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNameAndSpecs($useShortFormat)

    {
        if($useShortFormat){
            return sprintf('%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength);

        } else {

            return sprintf('%s: w:%s, j:%s, s:%s',
            $this->name,
            $this->weaponPower,
            $this->jediFactor,
            $this->strength);
        }
    }
    public function strengthComparator($givenShip)
    {
        return $givenShip->strength > $this->strength;
    }
}

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
    echo $otherShip->name . 'has more strength ';
} else {
    echo $myShip->name .' has more strength';
}