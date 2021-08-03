<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function ShowReg()
    {
        return view('register');
    }

    public function ShowLog()
    {
        return view('login');
    }

    public function Register(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        $credentials = $request->only('email', 'password');

        Auth::attempt($credentials);

        return redirect()->route('ShowHome');

    }

    public function Login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return redirect('/login')->with('status', 'Invalid User Details!');
        }
        
        return redirect()->route('ShowHome');
    }

    public function Logout()
    {
        Auth::logout();

        return redirect()->route('welcome');
    }
}
