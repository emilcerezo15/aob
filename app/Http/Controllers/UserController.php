<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login (Request $request) {
        if ($request->isMethod('post'))
            if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) return redirect()->intended('/landing');

        return view('login');
    }

    public function logout () {
        Auth::logout();

        return redirect('/');
    }
}
