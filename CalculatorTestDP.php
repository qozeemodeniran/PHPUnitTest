<?php declare(strict_types=1);

    use PHPUnit\Framework\TestCase;

    require 'Calculator.php';

    class CalculatorTestDP extends TestCase {

        private $calculator;

        protected function setUp(): void {
            $this->calculator = new Calculator();
        }

        protected function tearDown(): void {
            $this->calculator = NULL;
        }

        public function addDataProvider() {
            return array(
                array(1, 2, 3),
                array(0, 0, 0),
                array(-1, -1, -2),
            );
        }

        /**
         * @dataProvider addDataProvider
         */
        
        public function testAdd($a, $b, $expected){
            $result = $this->calculator->add($a, $b);
            $this->assertEquals($expected, $result);
        }

        public function minusDataProvider() {
            return array(
                array(1, 2, 1),
                array(0, 0, 0),
                array(-1, -1, 0),
            );
        }

        /**
         * @dataProvider minusDataProvider
         */

        public function testMinus($d, $c, $expected2) {
            $result2 = $this->calculator->minus($d, $c);
            $this->assertEquals($expected2, $result2);
        }
    }
?>