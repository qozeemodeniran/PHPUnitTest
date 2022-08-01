<?php declare(strict_types=1);

    use PHPUnit\Framework\TestCase;

    require 'Calculator.php';

    class CalculatorTest extends TestCase{
        private $calculator;

        protected function setUp(): void {
            $this->calculator = new Calculator();
        }

        protected function tearDown(): void {
            $this->calculator = NULL;
        }

        public function testAdd(){
            $result = $this->calculator->add(1, 2);
            $this->assertEquals(3, $result);
        }

        public function testMinus(){
            $result2 = $this->calculator->minus(3, 2);
            $this->assertEquals(1, $result2);
        }
    }
?>