<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginPostRegister;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('dashboard.register');
    }

    public function login() {
        if(auth()->check()){
            return redirect()->route('admin');
        }

        return view('dashboard.login');
        
    }



    public function store(RegisterRequest $request){
        User::create([
            'name'=>$request->name ,
            'email'=>$request->email,
            'password'=>Hash::make($request->password) ,
        ]); 

        return redirect()->route('login');
    }

    public function loginPost(LoginPostRegister $request){
        $user=User::where('email' , $request->email)->first();

        if(!$user){
            return redirect()->back()->with(['error'=>'email not found']);
        }

        if(!Hash::check($request->password , $user->password)){
            return redirect()->back()->with(['error'=>'password is incorrected']);
        }

        Auth::login($user);
        return redirect()->route('admin');

    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
