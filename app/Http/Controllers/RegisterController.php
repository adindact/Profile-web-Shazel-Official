<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return redirect('/');
        }
        return view('register');
    }

    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'password' => 'required'
        ]);
        $user = User::create($validated);
        auth()->login($user);
        return view('login');
    }
}
