<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserController extends Controller
{
    public function login_form(){

        return view('user.login');
    }

    public function signup_form(){

        return view('user.signup');
    }

    public function signup(){

        $this->validate(request(),[
            'password'=>'confirmed'
        ]);

        $user=User::create([
            'name_lastname'=>request('namelastname'),
            'email'=>request('email'),
            'password'=>Hash::make(request('password')),
            'activation_key'=>Str::random(60),
            'active'=>0

        ]);

        auth()->login($user);

        return redirect()->route('user.login');
    }

    public function login(){
        $this->validate(request(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(auth()->attempt(['email'=>request('email'),'password'=>request('password')],request()->has('rememberme')))
        {
            request()->session()->regenerate();
            return redirect()->intended('/');
        }
        else
        {
            $errors=['email'=>'Hatalı giriş'];
            return back()->withErrors($errors);
        }

    }

    public function logout(){
        auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('index');

    }
}
