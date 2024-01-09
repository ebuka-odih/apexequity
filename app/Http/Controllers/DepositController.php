<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function deposit()
    {
        $wallets = PaymentMethod::all();
        return view('dashboard.deposit', compact('wallets'));
    }
}
