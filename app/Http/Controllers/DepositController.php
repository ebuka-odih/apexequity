<?php

namespace App\Http\Controllers;

use App\Mail\AdminDepositAlert;
use App\Models\Deposit;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DepositController extends Controller
{
    public function deposit()
    {
        $wallets = PaymentMethod::all();
        return view('dashboard.deposit', compact('wallets'));
    }

    public function processDeposit(Request $request)
    {
        $deposit = new Deposit();
        $deposit->user_id = Auth::id();
        $deposit->amount = $request->amount;
        $deposit->payment_method_id = $request->payment_method_id;
        $deposit->save();
        return redirect()->route('user.payment', $deposit->id);
    }

    public function payment($id)
    {
        $deposit = Deposit::findOrFail($id);
        return view('dashboard.deposit.payment', compact('deposit'));
    }

    public function processPayment(Request $request)
    {
        $request->validate([
                'payment_proof' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:7048',
            ]
        );
        if ($request->hasFile('payment_proof')){
            $image = $request->file('payment_proof');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/proof');
            $image->move($destinationPath, $input['imagename']);

            $id = $request->deposit_id;
            $deposit = Deposit::findOrFail($id);
            $deposit->update(['payment_proof' => $input['imagename'] ]);
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new AdminDepositAlert($deposit));
            return redirect()->back()->with('success', "Transaction Sent, Awaiting Approval ");
        }
        return redirect()->back()->with('declined', "Please Upload Your Payment Screenshot ");

    }

}
