<?php

namespace Test;
use PHPUnit\Framework\TestCase;
use App\Calculator;
Class CalculatorTest extends TestCase{

    public function testAdd(){
        $calculator =new Calculator;
        $result = $calculator->add(2,1); 
        $this->assertEquals(3,$result);
    }

    public function testSubtract(){
        $calculator =new Calculator;
        $result = $calculator->subtract(2,1); 
        $this->assertEquals(1,$result);
    }

    public function testMultiply(){
        $calculator =new Calculator;
        $result = $calculator->multiply(2,1); 
        $this->assertEquals(2,$result);
    }

    public function testDivide(){
        $calculator =new Calculator;
        $result = $calculator->divide(2,1); 
        $this->assertEquals(2,$result);
    }
}