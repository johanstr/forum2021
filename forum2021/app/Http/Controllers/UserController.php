<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    public function edit()
    {
        return view('user.profile')
            ->with('user', Auth::user());
    }

    public function update(Request $request)
    {
        Auth::user()->update($request->only(['name', 'email']));

        return redirect()->back();
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
           'password' => [ 'required', 'confirmed', 'min:8' ],
           'password_confirmation' => [ 'required', 'min:8' ]
        ]);

        Auth::user()->update($validated);

        return redirect()->back();
    }
}
