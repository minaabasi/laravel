<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgetPasswordController extends Controller
{
    public function forgetpassword(){
        return view('dashboard.forget-password');
    }

    public function forgetpasswordPost(Request $request){

        $request->validate([
            'email'=>'required|email|exists:users'
        ]);

        $email= DB::table('password_reset_tokens')->where('email' , $request->email)->first();

        if($email){
            return redirect()->back()->with('error', 'password forget email has alredy been sent');
        }

        $token = str()->random(64);

        DB::table('password_reset_tokens')->insert([
            'email'=>$request->email ,
            'token'=>$token ,
            'created_at'=> Carbon::now()
        ]);

        Mail::send('dashboard.emails.forgetpassword' , ['token' => $token] , function($message) use($request){
            $message->to($request->email);
            $message->subject('reset password');
        });

        return redirect()->back()->with('success' , ' check your mail box');





    }


    public function resetpassword($token){
        return view('dashboard.reset-password' , compact('token'));
    }


    public function resetpasswordPost(Request $request){
         $request->validate([
            'token'=>'required',
            'password'=>'required|confirmed|min:8'
         ]);

         $updatePassword=DB::table('password_reset_tokens')->where('token' , $request->token)->first();

         if(!$updatePassword){
            return redirect()->back()->with('erroe' , 'invalid data');
         }
         User::where('email' , $updatePassword->email)->update([
            'password'=>Hash::make($request->password)
         ]);

         DB::table('password_reset_tokens')->where('token' , $request->token)->delete();
         return redirect()->route('admin');
    }

}
