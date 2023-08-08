<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\logo;
use App\Models\User;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(Navbar $navbar, logo $logo)
    {
        $navbars = $navbar::all();
        $logos = $logo::all();
        return view('layouts.login',compact('navbars','logos'));
    }

    public function validate_login(Request $request)
    {
            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            $credentials = $request->only('email','password');

            if(Auth::attempt($credentials))
            {
                return redirect('facultydashboard');
            }
            session()->regenerate();

            Session::put('key', 'value');

            return redirect('login')->with('success','login details are not valid'); 
    }
    public function register(Navbar $navbar, logo $logo)
    {
        $navbars = $navbar::all();
        $logos = $logo::all();
        return view('layouts.registration',compact('navbars','logos'));
    }

    public function validate_registration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $data = $request->all();
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
        return redirect('login')->with('success','Registration completed successfully');
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('home');
    }
}
