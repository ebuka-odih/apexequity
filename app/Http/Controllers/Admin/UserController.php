<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use function Symfony\Component\String\u;

class UserController extends Controller
{
    public function users()
    {
        $users = User::where('admin', 0)->get();
        return view('admin.user.list', compact('users'));
    }

    public function profile($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.profile', compact('user'));
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', "Deleted Successfully");
    }
}
