<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator,Redirect,Response;
use Illuminate\Support\Facades\Session;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AuthenticationController extends Controller
{
    public function dashboard() {

        if(Auth::check()) {

            return view('auth.dashboard');
        }
        return redirect()->route('login')->withError('Access Denied');
 
        
          }
        
     
    


    public function cases() {

        return view('auth.cases');
    }


    public function vehicles() {

        return view('auth.vehicles');
    }





    public function exports() {

        return view('auth.exports');
    }





    public function data_manage() {

        return view('auth.data_management');
    }





    public function clients() {

        return view('auth.clients');
    }


    
    public function process() {

        return view('auth.processes');
    }





public function login()

{

    return view('login');
}


public function register() {

    return view('register');
}

    
public function userLogin(Request $request) {

 // Validate form data
     $this->validate($request, [
    'email' => 'required|string|email',
    'password' => 'required|string',
    ]);

// Attempt to authenticate the user
if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
    // Authentication successful, redirect to home page or other desired location
    return redirect()->route('auth.dashboard')->withSuccess('You have Successfully Logged In');
} else {
    // Authentication failed, redirect back to login page with error message
    return redirect()->route('login')->withError('Invalid Credentials, Please try again');
}




}


public function userRegister(Request $request) {

  // Validate form data
  $this->validate($request, [
    'name' => 'required|string|max:255',
    'email' => 'required|string|email|max:255|unique:users',
    'password' => 'required|string|min:6|',
    ]);

// Create a new user
$user = new User;
$user->name = $request->input('name');
$user->email = $request->input('email');
$user->password = bcrypt($request->input('password'));
$user->save();

// Log the user in
Auth::login($user);
     
    return redirect()->route('auth.dashboard')->withSuccess('You have Successfully Logged In');
}


 

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/')->withSuccess('You  Successfully Logged Out');;
    }


}




