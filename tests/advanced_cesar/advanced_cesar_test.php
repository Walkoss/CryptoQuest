<?php

use PHPUnit\Framework\TestCase;

include_once("advanced_cesar/advanced_cesar.php");

class AdvancedCesarTest extends TestCase
{
	public function testWithBadString()
	{
		$result = advanced_cesar(1, 4, "bzdpxofnhwmglvkjitscyerqu", 0);
		$this->assertEquals(-1, $result);
		$this->expectOutputString("va t'acheter des doigts !\n");
	}

	public function testWithBadAlph()
	{
		$result = advanced_cesar("test", 4, 2, 2);
		$this->assertEquals(-1, $result);
		$this->expectOutputString("va t'acheter des doigts !\n");
	}

	public function testWithShortAlph()
	{
		$result = advanced_cesar("test", 4, "salut", 2);
		$this->assertEquals(-1, $result);
		$this->expectOutputString("va t'acheter des doigts !\n");
	}

	public function testWithBadFlag()
	{
		$result = advanced_cesar("test", 4, "bzdpxofnhwmglvkjitscyerqu", 2);
		$this->assertEquals(-1, $result);
		$this->expectOutputString("va t'acheter des doigts !\n");
	}

	public function testEncrypt()
	{
		$result = advanced_cesar("salut", 2, "bzdpxofnhwmglvkjitscyerqua", 1);
		$this->assertEquals("ydvre", $result);
	}

	public function testDecrypt()
	{
		$result = advanced_cesar("ydvre", 2, "bzdpxofnhwmglvkjitscyerqua", 0);
		$this->assertEquals("salut", $result);
	}
}
