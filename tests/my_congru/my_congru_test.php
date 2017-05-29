<?php

use PHPUnit\Framework\TestCase;

include_once("my_congru/my_congru.php");

class MyCongruTest extends TestCase
{
    public function testDivisorZero()
    {
        $result = my_congru(1, 4, 0);
        $this->assertEquals(-1, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testSuccessCongru()
    {
        $result = my_congru(26, 12, 7);
        $this->assertEquals(1, $result);
    }

    public function testFailCongru()
    {
        $result = my_congru(1, 4, 2);
        $this->assertEquals(0, $result);
    }

    public function testFloatNumber()
    {
        $result = my_congru(1.3, 4.4, 2.3);
        $this->assertEquals(-1, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }
}