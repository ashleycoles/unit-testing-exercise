<?php

declare(strict_types=1);

require_once 'src/Maths/double.php';

use PHPUnit\Framework\TestCase;

class doubleTest extends TestCase {
    // Our tests go in here!
    public function testSuccess(): void
    {
        // Arrange
        $input = 10;

        // Act
        $result = double($input);

        // Assert
        $expected = 20;
        $this->assertEquals($expected, $result);
    }



    public function testMalformed(): void
    {
        $input = [1, 2, 3];

        $this->expectException(TypeError::class);

        double($input);
    }
}