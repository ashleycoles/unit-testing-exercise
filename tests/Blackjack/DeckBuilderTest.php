<?php

declare(strict_types=1);

require_once 'src/Blackjack/DeckBuilder.php';

use PHPUnit\Framework\TestCase;

class DeckBuilderTest extends TestCase {
    public function testCreate(): void
    {
        $result = new DeckBuilder();
        $this->assertInstanceOf(DeckBuilder::class, $result);
    }

    public function test_generate_correctCount(): void
    {
        $builder = new DeckBuilder();
        $deck = $builder->generate();

        $expected = 52;

        $this->assertEquals($expected, count($deck));
    }

    public function test_generate_correctKeys(): void
    {
        $builder = new DeckBuilder();
        $deck = $builder->generate();

        foreach ($deck as $card) {
            $this->assertArrayHasKey('card', $card);
            $this->assertArrayHasKey('score', $card);
        }
    }
}