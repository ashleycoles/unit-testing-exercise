<?php

declare(strict_types=1);

class Weapon
{
    private int $damage = 20;

    public function dealDamage(): int
    {
        return $this->damage;
    }
}