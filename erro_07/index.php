<?php 
class DiscountCalculator {
    private $minimumValue = 10; 
    public function calculateDiscount($amount) {
        if ($amount > $this->minimumValue) { 
            $discount = $amount * 0.1;
        } else {
            $discount = $amount * 0.05;
        }
        
        return $discount;
    }

    public function setMinimumValue($value) {
        $this->minimumValue = $value; 
    }
}

$calculator = new DiscountCalculator();
echo $calculator->calculateDiscount(15); 
$calculator->setMinimumValue(20);
echo $calculator->calculateDiscount(15); 
?>