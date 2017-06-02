<?php

use PHPUnit\Framework\TestCase;

include_once("cesar/cesar.php");

class CesarTest extends TestCase
{
    public function testWithBadString()
    {
        $result = cesar(1, 4, 0);
        $this->assertEquals(-1, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testWithBadFlag()
    {
        $result = cesar("test", 4, 2);
        $this->assertEquals(-1, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testEncrypt()
    {
        $result = cesar("ttxx", 4, 1);
        $this->assertEquals("xxbb", $result);
    }

    public function testDecrypt()
    {
        $result = cesar("xiwx", 4, 0);
        $this->assertEquals("test", $result);
    }
}