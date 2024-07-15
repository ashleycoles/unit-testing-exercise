<?php

declare(strict_types=1);

function sumPositive(int $a, int $b): int
{
    if ($a <= 0 || $b <= 0) {
        throw new Exception('Can only add positive integers');
    }

    return $a + $b;
}