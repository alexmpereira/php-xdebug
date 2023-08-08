<?php
class DiscountCalculator
{
    public function calculateDiscount($amount)
    {
        $minimumValue = 10;

        if ($amount > $minimumValue) {
            $discount = $amount * 0.1;
        } else {
            $discount = $amount * 0.05;
        }

        // Algum código adicional que altera o valor mínimo durante a validação
        $minimumValue = 20;

        return $discount;
    }
}

//O problema está na variavel $minimumValue -> com voce podendo alterar o valor dele, o ideal seria tornar uma classe privada