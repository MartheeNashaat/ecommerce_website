<?php

namespace App\Http\Controllers;

use App\Models\Order;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;


class CreditcardController extends Controller
{

    public function index()
    {
        return view('cart.creditcard');
        
   }   

}