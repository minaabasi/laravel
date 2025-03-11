<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index(){
        if(auth()->check()){       

// گرفتن تاریخ و زمان فعلی
        $time = Carbon::now('Asia/Tehran');

// تبدیل به فرمت دلخواه
        $now=$time->toFormattedDateString(); // 2025-03-04 15:20:30

            return view('dashboard.dashboard' , compact('now'));
        }
        return redirect()->route('login');
    }

    public function list(){
        $users=User::all();
        return view('dashboard.users.list' , compact('users'));
    }

    public function create(){
        return view('dashboard.users.create');
    }


    public function store(Request $request){
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        return redirect()->route('users.list'); 
    }


    public function show(User $user){
        return view('dashboard.users.edit' , compact('user'));
    }

    public function update(Request $request , User $user){
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);

        return redirect()->route('users.list'); 

    }

    public function destroy(User $user){
    $user->delete();
    return redirect()->route('users.list');     
    }
}
