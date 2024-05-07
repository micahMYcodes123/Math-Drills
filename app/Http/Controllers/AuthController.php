<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
 use Illuminate\View\View;
 use App\Http\Controllers\DashboardController;


class AuthController extends Controller
{
    public function index(){
        return view("web.index");
    }
    
    public function login(){

        return view('auth.login');
        

    }

    public function authoticate(){
        // dd(request()-> all());
        
        $validated = request()->validate([
            'email' =>'required|email',
            'password' =>'required'
        ]);
        if(auth()->attempt($validated)){
            request()->session()->regenerate();

            return redirect()->route('dashboard');
        }
        
     return redirect()->route('login')->withErrors([

        'email'=> "No matching user with the provided email was found"
     ]);
    }










    public function register(){

        return view('auth.register');
        

    }

    public function store(){
        
        $validated = request()->validate([
            'name'=> 'required|min:3|max:40',
            'email' =>'required|email|unique:users,email',
            'password' =>'required|confirmed'
        ]);
        
            User::create(
            [
                'name'=> $validated['name'],
                'email'=> $validated['email'],
                'password'=> Hash::make($validated['password']),
            ]
            );
     return redirect()->route('login')->with('Success','Account Created Successfully!');
    }
}
