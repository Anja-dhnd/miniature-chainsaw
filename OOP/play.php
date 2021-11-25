<?php

class Ship
{
    public $name;
    public $weaponPower;
    public $jediFactor;
    public $strength;

    public function sayHello()
    {
        echo 'Hello!';
    }

    public function getName()
    {
        return $this->name;
    }
}

$myShip = new Ship();
$myShip->name = 'Jedi Starship';

echo 'Ship name: ' .$myShip->name;
echo '<hr />';
$myShip->sayHello();
echo '<hr />';
echo $myShip->getName();
