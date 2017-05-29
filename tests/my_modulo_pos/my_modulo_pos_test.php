<?php

use PHPUnit\Framework\TestCase;

include_once("my_modulo_pos/my_modulo_pos.php");

class MyModuloPosTest extends TestCase
{
    public function testDivisorZero()
    {
        $result = my_modulo_pos(4, 0);
        $this->assertEquals(4, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testDivisorNotInteger()
    {
        $result = my_modulo_pos(4, 4.5);
        $this->assertEquals(4, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testDividendNotInteger()
    {
        $result = my_modulo_pos(4.5, 4);
        $this->assertEquals(4.5, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testDividendAndDivisorNotInteger()
    {
        $result = my_modulo_pos(4.5, 4.8);
        $this->assertEquals(4.5, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testPositiveInteger()
    {
        $result = my_modulo_pos(4, 2);
        $this->assertEquals(0, $result);
    }

    public function testNegativeInteger()
    {
        $result = my_modulo_pos(-8, -5);
        $this->assertEquals(-8, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testNegativeDividend()
    {
        $result = my_modulo_pos(-8, 5);
        $this->assertEquals(-3, $result);
    }

    public function testPositiveDividend()
    {
        $result = my_modulo_pos(8, 5);
        $this->assertEquals(3, $result);
    }
}