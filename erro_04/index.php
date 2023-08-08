<?php 
class Math {
    public function divide($a, $b): float { //add float no lugar do int
        return $a / $b;
    }
}

$math = new Math();
echo $math->divide(10.5, 2);

?>