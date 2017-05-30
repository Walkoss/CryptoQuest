<?php

use PHPUnit\Framework\TestCase;


include_once("is_classeq/is_classeq.php");

class IsClasseQTest extends TestCase
{
    public function testWithNoArray()
    {
        $result = is_classeq(1, 4, 0);
        $this->assertEquals(-1, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testWithEmptyArray()
    {
        $result = is_classeq([], 12, 7);
        $this->assertEquals(-1, $result);
        $this->expectOutputString("va t'acheter des doigts !\n");
    }

    public function testFailIsClasseQ()
    {
        $result = is_classeq([2, 3, 4], 12, 7);
        $this->assertEquals(0, $result);
    }

    public function testSuccessIsClasseQ()
    {
        $result = is_classeq([12, 34, 6], 4, 2);
        $this->assertEquals(1, $result);
    }
}