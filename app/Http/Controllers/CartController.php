<?php

namespace App\Http\Controllers;

use App\Channel;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {

        //Option 1
        // $channels = Channel::all();

        // return view('shopping.cart', [
        //     'channels' => $channels
        // ]);

        return view('shopping.cart');
    }
}
