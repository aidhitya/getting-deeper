<?php

namespace App\Http\Controllers;

use App\Channel;
use Illuminate\Http\Request;

class ChannelController extends Controller
{


    public function index()
    {

        //Option 1

        // $channels = Channel::all();

        // return view('index', [
        //     'channels' => $channels
        // ]);

        return view('inventory.list');
    }
}
