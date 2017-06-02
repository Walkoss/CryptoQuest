<?php

use PHPUnit\Framework\TestCase;


include_once("inv_modulo/inv_modulo.php");

class InvModuloTest extends TestCase
{
    public function testWithNullDivisor()
    {
        $result = inv_modulo(1, 0);
        $this->assertEquals(0, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testWithFloatNumberDivisor()
    {
        $result = inv_modulo(1, 2.3);
        $this->assertEquals(0, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testWithFloatNumberDividend()
    {
        $result = inv_modulo(1.4, 2);
        $this->assertEquals(0, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testFailInvModulo()
    {
        $result = inv_modulo(3, 3);
        $this->assertEquals(0, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testSuccessInvModulo()
    {
        $result = inv_modulo(3, 4);
        $this->assertEquals(3, $result);
    }
}