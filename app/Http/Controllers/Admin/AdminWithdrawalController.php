<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Withdrawal;
use http\Env\Url;
use Illuminate\Http\Request;

class AdminWithdrawalController extends Controller
{
    public function withdrawal()
    {
        $withdrawal = Withdrawal::all();
        return view('admin.transactions.withdrawal', compact('withdrawal'));
    }

    public function withdrawalDetails($id)
    {
        $withdrawal = Withdrawal::findOrFail($id);
        return view('admin.transactions.view-withdrawal', compact('withdrawal'));
    }

    public function approveWithdrawal($id)
    {
        $withdrawal = Withdrawal::findOrFail($id);
        $withdrawal->status = 1;
        $withdrawal->save();
        return redirect()->back()->with('success', "Withdrawal Approved");
    }

    public function deleteWithdrawal($id)
    {
        $withdrawal = Withdrawal::findOrFail($id);
        $withdrawal->delete();
        return redirect()->back()->with('success', "Deleted Successfully");
    }
}
