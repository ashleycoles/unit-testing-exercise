<?php

declare(strict_types=1);

require_once 'src/Maths/circleArea.php';

use PHPUnit\Framework\TestCase;

class circleAreaTest extends TestCase {
    public function testSuccess(): void
    {
        $input = 4;

        $expected = 50.26548245743669;

        $result = circleArea($input);

        $this->assertEquals($expected, $result);
    }

    public function testFailure(): void
    {
        $input = -4;

        $this->expectException(Exception::class);

        circleArea($input);
    }
}