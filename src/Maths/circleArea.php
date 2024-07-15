<?php

declare(strict_types=1);

function circleArea(int $radius): float {
    if ($radius <= 0) {
        throw new Exception('Radius must be positive');
    }
    // Define the value of Pi
    $pi = pi();

    // Calculate the area
    $area = $pi * pow($radius, 2);

    // Return the area
    return $area;
}
