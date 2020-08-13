<?php

namespace App\Billing;

use Illuminate\Support\Str;

class CreditPaymentGateway implements PaymentGateway
{

    private $currency;
    private $discount;

    public function __construct($currency)
    {
        $this->currency;
        $this->discount = 0;
    }

    public function charge($amount)
    {
        $fees = $amount * 0.03;
        return  [
            'amount' => ($amount - $this->discount) + $fees,
            'confirmation_order' => Str::random(),
            'currency' => 'usd',
            'discount' => $this->discount,
            'fees' => $fees
        ];
    }

    public function setDiscount($amount)
    {
        $this->discount = $amount;
    }
}
