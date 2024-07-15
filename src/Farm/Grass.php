<?php

declare(strict_types=1);

class Grass {
    private string $foodType = 'Grass';

    public function getFoodType(): string
    {
        return $this->foodType;
    }
}