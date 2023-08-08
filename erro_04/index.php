<?php 
class Math {
    public function divide($a, $b): float {
        return $a / $b;
    }
}

$math = new Math();
echo $math->divide(10.5, 2);

?>