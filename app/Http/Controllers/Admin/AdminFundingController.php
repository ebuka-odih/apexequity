<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Funding;
use App\Models\User;
use Illuminate\Http\Request;

class AdminFundingController extends Controller
{
    public function index()
    {
        $funding = Funding::all();
        $users = User::all();
        return view('admin.user.funding', compact('funding', 'users'));
    }

    public function store(Request $request)
    {
        if ($request->f_type == 'credit')
        {
            $funding = new Funding();
            $funding->type = $request->type;
            $funding->amount = $request->amount;
            $funding->status = 1;
            $funding->user_id = $request->user_id;
            $funding->f_type = 'credit';
            $funding->save();
            $user = User::findOrFail($funding->user_id);
            if ($request->type == 'Deposit'){
                $user->balance += $request->amount;
                $user->save();
                return redirect()->back()->with('success', "Funds Sent Successfully");
            }
            $user->profit += $request->amount;
            $user->save();
            return redirect()->back()->with('success', "Funds Sent Successfully");
        }
        elseif($request->f_type == 'debit'){
            $funding = new Funding();
            $funding->type = $request->type;
            $funding->amount = $request->amount;
            $funding->status = 1;
            $funding->f_type = 'debit';
            $funding->user_id = $request->user_id;
            $funding->save();
            $user = User::findOrFail($funding->user_id);
            if ($request->type == 'Deposit'){
                $user->balance -= $request->amount;
                $user->save();
                return redirect()->back()->with('success', "Funds Debit Successfully");
            }
            $user->profit -= $request->amount;
            $user->save();
            return redirect()->back()->with('success', "Funds Debit Successfully");
        }

        return redirect()->back()->with('error', "Action not performed");

    }

}
