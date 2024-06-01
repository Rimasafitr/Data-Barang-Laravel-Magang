<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;

class AuthController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request) {
        $user = new User();

        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('login');
    }

    public function login() {
        return view('login');
    }

    public function loginPost(Request $request) {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credetials)) {
            return redirect('/main')->with('success', 'Login Berhasil');
        }
        return back()->with('error', 'Email or Password Salah');
    }

    public function main()
    {
        return view('main');
    }

    public function home()
    {
        return view('home');
    }
}
