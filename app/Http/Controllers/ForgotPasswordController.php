<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ForgotPasswordController extends Controller
{
    public function showForgetForm()
    {
        return view('forgotpassword');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'password1' => 'required',
            'password2' => ['required', 'same:password1'],
        ]);

        $email = $request->email;
        $name = $request->name;
        $password = Hash::make($request->password1);

        $user = DB::table('users')->where('email', $email)->where('name', $name)->first();

        if ($user) {
            // Update password in the database
            DB::table('users')->where('email', $email)->update(['password' => $password]);

            // Jika berhasil mengupdate password
            return redirect()->route('login.index')->with('success', 'Password has been updated successfully.');
        }

        // Jika email tidak ditemukan dalam database
        throw ValidationException::withMessages([
            'email' => ['The provided email does not exist.'],
            'name' => ['The given name does not exist.'],
        ]);
    }
}
