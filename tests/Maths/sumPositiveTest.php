<?php

declare(strict_types=1);

require_once 'src/Maths/sumPositive.php';

use PHPUnit\Framework\TestCase;

class sumPositiveTest extends TestCase {
    // Our tests go in here!
    public function testSuccess(): void
    {
        // Arrange
        $inputA = 10;
        $inputB = 5;

        // Act
        $result = sumPositive($inputA, $inputB);

        // Assert
        $expected = 15;
        $this->assertEquals($expected, $result);
    }

    public function testFailure(): void
    {
        $inputA = -1;
        $inputB = -10;

        // Important when you're testing for exceptions, that you expectException before you trigger it
        $this->expectException(Exception::class);

        sumPositive($inputA, $inputB);
    }

    public function testMalformed(): void
    {
        $inputA = [1, 2, 3];
        $inputB = [1, 2, 3];

        $this->expectException(TypeError::class);

        sumPositive($inputA, $inputB);
    }
}