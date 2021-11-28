<?php
class Ship
{
    private string $name;
    private int $weaponPower = 0;
    private int $jediFactor = 0;
    private int $strength = 0;

    public function sayHello()
    {
        echo 'Hello!';
    }

    public function getName()
    {
        return $this->name;
    }

    public function setStrength($number): void
    {
        if (!is_numeric($number)) {
            throw new \Exception('Invalid strength passed '.$number);
        }

        $this->strength = $number;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    public function getNameAndSpecs($useShortFormat = false)
    {
        if ($useShortFormat) {
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        } else {
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        }
    }

    public function strengthComparator($givenShip): bool
    {
        return $givenShip->strength > $this->strength;
    }

    /**
     * @return int
     */
    public function getWeaponPower(): int
    {
        return $this->weaponPower;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower(int $weaponPower): void
    {
        $this->weaponPower = $weaponPower;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param int $jediFactor
     */
    public function setJediFactor(int $jediFactor): void
    {
        $this->jediFactor = $jediFactor;
    }


}