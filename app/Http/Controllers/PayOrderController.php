<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing\PaymentGateway;
use App\Orders\OrderDetails;

class PayOrderController extends Controller
{

    public function store(OrderDetails $orderDetails, PaymentGateway $paymentGateway)
    {
        // $payment = new PaymentGateway();

        $order = $orderDetails->all();

        // $paymentGateway->charge(2500);

        dd($paymentGateway->charge(2500));
    }
}
