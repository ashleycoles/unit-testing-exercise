<?php

declare(strict_types=1);

class DeckBuilder {
    public function generate(): array
    {
        $deck = [];

        $suits = ['Hearts', 'Diamonds', 'Clubs', 'Spades'];
        $cards = [
            'ace' => 11,
            '2' => 2,
            '3' => 3,
            '4' => 4,
            '5' => 5,
            '6' => 6,
            '7' => 7,
            '8' => 8,
            '9' => 9,
            '10' => 10,
            'jack' => 10,
            'queen' => 10,
            'king' => 10
        ];

        foreach ($suits as $suit) {
            foreach ($cards as $name => $score) {
                $deck[] = [
                    'card' => "$name of $suit",
                    'score' => $score
                ];
            }
        }

        return $deck;
    }
}
