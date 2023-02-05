<?php
namespace MyClasses;

use PHPUnit\Framework\TestCase;

class AnagramTest extends TestCase
{

    private $anagram;

    protected function setUp(): void
    {
        $this->anagram = new namespace\AnagramClass('a1bcd efg!h');

    }

    protected function tearDown(): void
    {

    }
    public function testDefaultValues(){
        $this->assertEquals('a1bcd efg!h',$this->anagram->getInputString());
    }


}