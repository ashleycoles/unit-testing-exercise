<?php

declare(strict_types=1);

require_once 'src/Game/Character.php';

use PHPUnit\Framework\TestCase;

class CharacterTest extends TestCase {

    public function testCreate(): void
    {
        $weaponMock = $this->createMock(Weapon::class);
        $result = new Character('test', $weaponMock);
        $this->assertInstanceOf(Character::class, $result);
    }

    public function test_attack_success(): void
    {
        $weaponMock = $this->createMock(Weapon::class);
        $weaponMock->method('dealDamage')->willReturn(20);

        $character = new Character('test', $weaponMock);

        $expected = 'test hit you for 20 damage.';

        $result = $character->attack();

        $this->assertEquals($expected, $result);
    }

}