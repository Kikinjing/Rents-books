<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades;

class AuthController extends Controller
{
    public function landing()
    {
        return view('landing.welcome');
    }

    public function indexRegister(){
        return view('auth.register');
    }

    public function storeRegister(Request $request)
    {
        $credentials =$request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $credentials['password'] = bcrypt($credentials['password']);

        User::create($credentials);
        return redirect('indexLogin');
    }

    public function indexLogin()
    {
        return view('auth.login');
    }

    public function storeLogin(Request $request)
    {
        $login = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($login))
        {
            $request->session()->regenerate();
            if(Auth::user() && Auth::user()->role_id == 1){
            return redirect('dashboard');
            }
            return redirect()->intended('dashboard-user');
        }
            
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
       
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
    
}
    