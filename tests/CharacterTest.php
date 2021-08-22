<?php
use PHPUnit\Framework\TestCase;
require 'src/Classes/Character.php';

class CharacterTest extends TestCase
{
    public $character = null;

    public function setUp(): void
    {
        parent::setUp();
        $this->character = new Character();
    }
    // TODO: FIX THE FAILED TEST :(
    public function testSetRace()
    {
        $value = $this->character->setRace("Hobbit");
        $this->assertIsString($value);
        $this->assertEquals('Hobbit', $value);
    }
}