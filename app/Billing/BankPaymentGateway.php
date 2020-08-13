<?php

namespace App\Billing;

use Illuminate\Support\Str;

class BankPaymentGateway implements PaymentGateway
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
        return  [
            'amount' => $amount - $this->discount,
            'confirmation_order' => Str::random(),
            'currency' => 'usd',
            'discount' => $this->discount
        ];
    }

    public function setDiscount($amount)
    {
        $this->discount = $amount;
    }
}
