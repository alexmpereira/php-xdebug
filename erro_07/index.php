<?php
    class DiscountCalculator {
        private $minimumValue = 10;
        private $discount;

        public function calculateDiscount($amount) {
            if ($amount > $this->minimumValue) {
                $this->discount = $amount * 0.1;
            } else {
                $this->discount = $amount * 0.05;
            }

            return $this->discount;
        }
    }
?>
