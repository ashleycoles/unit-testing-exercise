<?php

declare(strict_types=1);

require_once 'src/Farm/Cow.php';

use PHPUnit\Framework\TestCase;

class CowTest extends TestCase {
    public function testCreateCow(): void
    {
        $cow = new Cow();
        $this->assertInstanceOf(Cow::class, $cow);
    }

    public function test_feed_success(): void
    {
        // Arrange
        $cow = new Cow();
        // Creating some fake grass so that we can test the cow in isolation

        // Whenever the object you are testing depends on another object
        // Instead of using the dependency object, you should create a mock version of it
        // Otherwise if the test fails you won't know what broke
        $grassMock = $this->createMock(Grass::class); // Call createMock and give it the class you need
        $grassMock->method('getFoodType')->willReturn('Grass'); // Give your mock 'fake' methods that make it act like the real thing
        // if your mock needs more than one method, you just repeat the above line as many times as needed

        // Act
        $result = $cow->feed($grassMock);
        // Assert
        $expected = 'mmmm Grass.';
        $this->assertEquals($expected, $result);
    }
}