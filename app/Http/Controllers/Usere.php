<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class Usere extends Controller
{
    //
    public function index()
    {
        if (!Session::get('login')) {
            return redirect('login')->with('alert', 'Kamu harus login dulu');
        } else {
            return view('dashboard');
        }
    }

    public function dashboard()
    {

        return view('dashboard');
    }

    public function login()
    {
        return view('login');
    }

    public function loginpost(Request $request)
    {
        if (!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect('/login');
        } else {
            return redirect('/dashboard');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('login')->with('alert', 'Kamu sudah logout');
    }

    public function register()
    {
        return view('register');
    }

    public function simpanuser(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/register');
    }
}
