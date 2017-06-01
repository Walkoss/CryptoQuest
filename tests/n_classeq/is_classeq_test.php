<?php

use PHPUnit\Framework\TestCase;

include_once("n_classeq/n_classeq.php");

class NClasseQTest extends TestCase
{
    public function testWithNoArray()
    {
        $result = n_classeq(1, 4);
        $this->assertEquals(-1, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testWithEmptyArray()
    {
        $result = n_classeq([], 12);
        $this->assertEquals(-1, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testWithFloatDividend()
    {
        $result = n_classeq([2, 3], 12.3);
        $this->assertEquals(-1, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testWithNegativDividend()
    {
        $result = n_classeq([2, 3], -3);
        $this->assertEquals(-1, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testWithNullDividend()
    {
        $result = n_classeq([2, 3], 0);
        $this->assertEquals(-1, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testWithStringArray()
    {
        $result = n_classeq(['test', 'test'], 0);
        $this->assertEquals(-1, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testWithNegativeNumbersArray()
    {
        $result = n_classeq([-3, -4], 0);
        $this->assertEquals(-1, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testFailIsClasseQ()
    {
        $result = n_classeq([2, 3, 4], 2);
        $this->assertEquals(0, $result);
    }

    public function testSuccessIsClasseQ()
    {
        $result = n_classeq([12, 34, 6], 4);
        $this->assertEquals(2, $result);
    }
}