<?php 
class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }

    public function multiply($a, $b) { // add multiplicação
       return $a * $b; 
    }
}

$calculator = new Calculator();
echo $calculator->multiply(2, 3);

?>