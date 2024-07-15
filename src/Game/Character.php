<?php

declare(strict_types=1);

require_once 'src/Game/Weapon.php';

class Character
{
    private string $name;
    private int $health = 100;
    private Weapon $weapon;

    public function __construct(string $name, Weapon $weapon)
    {
        $this->name = $name;
        $this->weapon = $weapon;
    }

    public function attack(): string
    {
        return "$this->name hit you for {$this->weapon->dealDamage()} damage.";
    }
}