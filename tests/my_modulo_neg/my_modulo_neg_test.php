<?php

use PHPUnit\Framework\TestCase;

include_once("my_modulo_neg/my_modulo_neg.php");

class MyModuloNegTest extends TestCase
{
    public function testDivisorZero()
    {
        $result = my_modulo_neg(4, 0);
        $this->assertEquals(4, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testDivisorNotInteger()
    {
        $result = my_modulo_neg(4, 4.5);
        $this->assertEquals(4, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testDividendNotInteger()
    {
        $result = my_modulo_neg(4.5, 4);
        $this->assertEquals(4.5, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testDividendAndDivisorNotInteger()
    {
        $result = my_modulo_neg(4.5, 4.8);
        $this->assertEquals(4.5, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testPositiveInteger()
    {
        $result = my_modulo_neg(4, 2);
        $this->assertEquals(4, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testNegativeDividend()
    {
        $result = my_modulo_neg(-8, -5);
        $this->assertEquals(2, $result);
    }

    public function testPositiveDividend()
    {
        $result = my_modulo_neg(8, -5);
        $this->assertEquals(3, $result);
    }
}
