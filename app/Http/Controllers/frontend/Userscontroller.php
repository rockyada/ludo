<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Http\Requests\SignupRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Session,Auth;

class Userscontroller extends Controller
{
    public function signup() {
        if(Auth::check()){
            return redirect('/');
        }
        return View("frontend.users.signup");
    }
    
    public function signupRequest(SignupRequest $request){
        $refer_code            =   User::where('referral_code',$request->refer_code)->value('referral_code'); 
        $users                 =   new User;
        $users->vplay_id       =   VPLAYID();
        $users->name           =   $request->full_name ?? '';
        $users->mobile         =   $request->phone_number ?? '';
        $users->referral_code  =   ReferralCode($request->phone_number);
        $users->reffered_by    =   $refer_code;
        $users->otp            =   $this->getVerificationCode();
        $users->verify_token   =   Str::random(30);
        $users->save();

        Session()->put('timer',date("Y-m-d H:i:s",strtotime("+ 1 min")));
        return route('users.userVerify',[$users->verify_token]);
    }

    public function userVerify(Request $request,$token=null) {
        $users = User::where('verify_token',$token)->first();
        if($users != null){
            if($request->isMethod("POST")){
                $user = User::where('verify_token',$token)->where('otp',implode("",$request->otp))->first();
                if($user){  
                    $user->otp               =   null;
                    $user->verify_token      =   null;
                    $user->save();
                    Auth::loginUsingId($user->id);  
                    Session()->forget('timer');
                    return redirect('/')->with('success',"You are now logged in.");
                }else{
                    return back()->with('error',"OTP is invalid.");
                }
            }
            return View("frontend.users.user-verify",compact('token'));
        }else{
            return redirect()->route('users.login')->with('error',"This Verify token has been not exist.");
        }
    }

    public function resendOtp($token='') {
        $users = User::where('verify_token',$token)->first();
        if($users != null){
            $users->otp                =   $this->getVerificationCode();
            $users->verify_token       =   Str::random(30);
            $users->save(); 
            Session()->put('timer',date("Y-m-d H:i:s",strtotime("+ 1 min")));
            return redirect()->route('users.userVerify',[$users->verify_token]);
        }else{
            return redirect()->route('users.login')->with('error',"This Verify token has been not exist.");
        }
    }

    public function login(Request $request) {
        if(Auth::check()){
            return redirect('/');
        }
        if($request->isMethod("POST")){
            if(strlen($request->phone_number) == 10){
                $users = User::where('mobile',$request->phone_number)->first();
                if($users == null){
                    $users                 =   new User;
                    $users->vplay_id       =   VPLAYID();
                    $users->name           =   VPLAYID();
                    $users->mobile         =   $request->phone_number ?? '';
                    $users->referral_code  =   ReferralCode($request->phone_number);
                    $users->reffered_by    =   "";
                }
                $users->otp                =   $this->getVerificationCode();
                $users->verify_token       =   Str::random(30);
                $users->save(); 
                Session()->put('timer',date("Y-m-d H:i:s",strtotime("+ 1 min")));
                return redirect()->route('users.userVerify',[$users->verify_token]);
            }else{
                if(strlen($request->phone_number) > 1){
                    return back()->with('error',"This mobile number has been invalid.");
                }else{
                    return back()->with('error',"The mobile number field is required.");
                }
            }
        }
        return View("frontend.users.login");
    }

}
