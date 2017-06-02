<?php

use PHPUnit\Framework\TestCase;

include_once("rev_vigenere/rev_vigenere.php");

class RevVigenereTest extends TestCase
{
    public function testWithBadString()
    {
        $result = rev_vigenere("???", "!!!");
        $this->assertEquals("???", $result);
    }

    public function testWithEmptyKey()
    {
	$result = rev_vigenere("adsdas", "");
	$this->assertEquals(-1, $result);
	$this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testWithEmptyString()
    {
	$result = rev_vigenere("", "asdadas");
	$this->assertEquals(-1, $result);
	$this->expectOutputString("va t'acheter des doigts !\n");
    }
    public function testWithEmptyStringAndKey()
    {
	$result = rev_vigenere("", "");
	$this->assertEquals(-1, $result);
	$this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testWithInt()
    {
	$result = rev_vigenere(1, "asas");
	$this->assertEquals(-1, $result);
	$this->expectOutputString("va t'acheter des doigts !\n");
    }
    
    public function testWithKeyInt()
    {
	$result = rev_vigenere("aSa", 1);
	$this->assertEquals(-1, $result);
	$this->expectOutputString("va t'acheter des doigts !\n");
    }
}
