<?php

class Ship
{
    private string $name;

    private int $weaponPower = 0;

    private int $jediFactor = 0;

    private int $strength = 0;

    private int $underRepair;

    public function __construct($name)
    {
        $this->name = $name;
        // randomly put this ship under repair
        $this->underRepair = mt_rand(1, 100) < 30;
    }

    public function isFunctional(): bool
    {
        return !$this->underRepair;
    }

    public function sayHello(): void
    {
        echo 'Hello!';
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setStrength($number): void
    {
        if (!is_numeric($number)) {
            throw new \RuntimeException('Invalid strength passed '.$number);
        }

        $this->strength = $number;
    }

    public function getStrength(): int
    {
        return $this->strength;
    }

    public function getNameAndSpecs($useShortFormat = false): ?string
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
     * @return int
     */
    public function getJediFactor(): int
    {
        return $this->jediFactor;
    }

    /**
     * @param string $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower($weaponPower): void
    {
        $this->weaponPower = $weaponPower;
    }

    /**
     * @param int $jediFactor
     */
    public function setJediFactor($jediFactor): void
    {
        $this->jediFactor = $jediFactor;
    }
}
