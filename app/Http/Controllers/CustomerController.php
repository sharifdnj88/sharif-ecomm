<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{
    public function CustomerLogin(Request $request)
    {
         // Validate 
         $this -> validate($request, [
            'email'         =>'required',
            'password'    =>'required'
         ]);

        //   Try To Login
        if( Auth::guard('Customer') -> attempt([ 'email' => $request -> email, 'password' => $request -> password, ]) || Auth::guard('Customer') -> attempt([ 'phone' => $request -> email, 'password' => $request -> password ]) ){   
            Alert::success('স্বাগতম', 'আমাদের ওয়েবসাইট এ আসার জন্য।');        
            return redirect() -> route('home.page');
        }else{
            Auth::guard('Customer') -> logout();
            Alert::error('Invalid User', 'Wrong email or password');
            return redirect()-> back();
        }
    }


    public function CustomerStore(Request $request)
    {
        // Validate 
        $this -> validate($request, [
            'name'         =>'required|max:10',
            'email'         =>'required|unique:customers',
            'phone'         =>'required',
            'password'    =>'required'
         ]);

         Customer::create([
            'name'                  =>$request -> name,
            'email'                   =>$request -> email,
            'phone'                   =>$request -> phone,
            'password'            => password_hash($request -> password, PASSWORD_DEFAULT),
         ]);

         Alert::success('Your account create successfully', 'Please Log in!');
         return redirect() -> route('user.login.page');


    }

    

}
