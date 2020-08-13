<?php

namespace App\Orders;

use App\Billing\PaymentGateway;

class OrderDetails
{

    private $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function all()
    {

        return $this->paymentGateway->setDiscount(500);

        // return [
        //     'name' => 'Jaya',
        //     'address' => 'Pemalang'
        // ];
    }
}
