<?php

declare(strict_types=1);

require_once 'src/Game/Weapon.php';

use PHPUnit\Framework\TestCase;

class WeaponTest extends TestCase {
    public function testCreate(): void
    {
        $weapon = new Weapon();
        $this->assertInstanceOf(Weapon::class, $weapon);
    }

    public function test_getFoodType_success(): void
    {
        $weapon = new Weapon();

        $expected = 20;

        $result = $weapon->dealDamage();

        $this->assertEquals($expected, $result);
    }
}