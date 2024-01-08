<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Illuminate\Http\Request;

class AdminDepositsController extends Controller
{
    public function deposits()
    {
        $deposits = Deposit::all();
        return view('admin.transactions.deposits', compact('deposits'));
    }

    public function viewDeposit($id)
    {
        $deposit = Deposit::findOrFail($id);
        return view('admin.transactions.view-deposit', compact('deposit'));
    }

    public function approveDeposit($id)
    {
        $deposit = Deposit::findOrFail($id);
        $deposit->status = 1;
        $deposit->save();
        return redirect()->back()->with('success', "Deposit Approved Successfully");
    }

    public function deleteDeposit($id)
    {
        $deposit = Deposit::findOrFail($id);
        $deposit->delete();
        return redirect()->back()->with('success', "Deleted Successfully");
    }


}
