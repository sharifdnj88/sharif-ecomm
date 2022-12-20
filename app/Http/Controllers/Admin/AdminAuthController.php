<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin;
use App\Notifications\OTPVerification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{


    //  Admin Login System
    public function Login(Request $request)
    {
         // Validate 
         $this -> validate($request, [
            'email'         =>'required',
            'password'    =>'required'
         ]);

        //   Try To Login
        if( Auth::guard('admin') -> attempt([ 'email' => $request -> email, 'password' => $request -> password ]) || Auth::guard('admin') -> attempt([ 'mobile' => $request -> email, 'password' => $request -> password ]) ){
           
            $admin = admin::findOrFail( Auth::guard('admin') -> User() -> id );
            $adminotp = rand(11111,999999);
            $admin->update([
                'otp'   => $adminotp
            ]);
            $admin ->notify(new OTPVerification($adminotp));

            
            if(  Auth::guard('admin') -> User() -> status && Auth::guard('admin') -> User() -> trash == false  ){
                return redirect() -> route('otp.page');
            }else{
                Auth::guard('admin') -> logout();
                return redirect() -> route('login.page') -> with('danger', 'Your account Suspend contact your Admin department');                
            }
           
        }else{
            return redirect() -> route('login.page') -> with('danger', 'Wrong Email or Password');
        }


    }


    public function otp(Request $request)
    {
        // Validate 
        $this -> validate($request, [
            'otp'         =>'required',
         ]);

         $otp = admin::where('otp', $request ->otp ) ->first();

         if( $otp ){
            $admin = admin::findOrFail( Auth::guard('admin') -> User() -> id );
            $admin->update([
                'otp'   => null
            ]);
            return redirect() -> route('admin.dashboard');
        }else{
            return redirect() -> route('otp.page') -> with('danger', 'Invalid OTP');  
        }

    }



    //  Admin Logout
    public function logout()
    {
        Auth::guard('admin') -> logout();
        return redirect() -> route('login.page') -> with('success', 'Thanks for staying with us');
    }



}
