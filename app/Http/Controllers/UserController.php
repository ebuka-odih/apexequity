<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('dashboard.index', compact('user'));
    }

    public function menu()
    {
        return view('dashboard.layout.menu');
    }


}
