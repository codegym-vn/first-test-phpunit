<?php
require "./src/Calculator.php";

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {

    /**
     * @param $firstOperand
     * @param $secondOperand
     * @param $expected
     *
     * @dataProvider providerTestAddSuccess
     */
    public function testAddSuccess($firstOperand, $secondOperand, $expected)
    {
        $calculator = new Calculator();

        $result = $calculator->add($firstOperand, $secondOperand);
        $this->assertEquals($result, $expected);
    }

    public function providerTestAddSuccess(){
        return array(
            array(0, 0, 0),
            array(0, 1, 1),
            array(1, 1, 2),
            array(-1, 0, -1),
            array(-1, 1, 0),
        );
    }
}