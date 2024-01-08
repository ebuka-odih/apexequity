<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use function Laravel\Prompts\password;

class AdminPaymentMethodController extends Controller
{
    public function index()
    {
        $wallets = PaymentMethod::all();
        return view('admin.add-wallet', compact('wallets'));
    }

    public function store(Request $request)
    {
        $wallet = new PaymentMethod();
        $wallet->name = $request->name;
        $wallet->value = $request->value;
        $wallet->save();
        return redirect()->back()->with('success', "Wallet Added Successfully");
    }

    public function edit($id)
    {
        $wallet = PaymentMethod::findOrFail($id);
        return view('admin.edit-wallet', compact('wallet'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'nullable',
            'value' => 'nullable'
        ]);
        $wallet = PaymentMethod::findOrFail($id);
        $wallet->update($data);
        return redirect()->route('admin.wallet.index')->with('success', "Wallet Updated Successfully");
    }

    public function destroy($id)
    {
        $wallet = PaymentMethod::findOrFail($id);
        $wallet->delete();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }


}
