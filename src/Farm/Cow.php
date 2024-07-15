<?php

declare(strict_types=1);

require_once 'src/Farm/Grass.php';

class Cow {
    public function feed(Grass $grass): string
    {
        return "mmmm {$grass->getFoodType()}.";
    }
}