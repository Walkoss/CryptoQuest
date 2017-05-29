<?php

use PHPUnit\Framework\TestCase;

include_once("my_modulo/my_modulo.php");

class MyModuloTest extends TestCase
{
    public function testDivisorZero()
    {
        $result = my_modulo(4, 0);
        $this->assertEquals(4, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testDivisorNotInteger()
    {
        $result = my_modulo(4, 4.5);
        $this->assertEquals(4, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testDividendNotInteger()
    {
        $result = my_modulo(4.5, 4);
        $this->assertEquals(4.5, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testDividendAndDivisorNotInteger()
    {
        $result = my_modulo(4.5, 4.8);
        $this->assertEquals(4.5, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testPositiveInteger()
    {
        $result = my_modulo(4, 2);
        $this->assertEquals(0, $result);
    }

    public function testNegativeInteger()
    {
        $result = my_modulo(-8, -5);
        $this->assertEquals(-3, $result);
    }

    public function testPositiveAndNegativeInteger()
    {
        $result = my_modulo(-8, 2);
        $this->assertEquals(0, $result);
    }
}