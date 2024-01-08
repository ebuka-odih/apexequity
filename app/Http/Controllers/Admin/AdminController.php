<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Funding;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::where('admin', 0)->count();
        $deposit = Deposit::where('status', 1)->select('amount')->sum('amount');
        $withdrawal = Withdrawal::where('status', 1)->select('amount')->sum('amount');
        $funding = Funding::where('status', 1)->select('amount')->sum('amount');
        return view('admin.index', compact('users', 'deposit', 'withdrawal', 'funding'));
    }

    public function security()
    {
        return view('admin.security');
    }

    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);
        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }
        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with("success", "Password changed successfully!");
    }

}
