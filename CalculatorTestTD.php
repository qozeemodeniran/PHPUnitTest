<?php declare(strict_types=1);

    use PHPUnit\Framework\TestCase;

    require 'Calculator.php';

    class CalculatorTestTD extends TestCase {

        public function testWithStub() {

            // Create a stub for the Calculator class
            $calculator = $this->getMockBuilder('Calculator')->getMock();

            //  Configure the stub
            $calculator->expects($this->any())->method('add')->will($this->returnValue(6));

            $this->assertEquals(6, $calculator->add(100, 100));
        }
    }
?>