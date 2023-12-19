<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }

    function register(){
        return view('register');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'pswd' => 'required'
        ]);

        $credentials = $request->only('email', 'pswd');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('dashboard'));
        }
        return redirect(route('login'))->with("error", "Login details are not valid");
    }

    function registerPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'pswd' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['pswd'] = Hash::make($request->pswd);
        $user = User::create($data);
        if(!$user){
            return redirect(route('register'))->with("error", "Registration failed, try again");
        }
        return redirect(route('login'))->with("Success", "Registration Successfull, Login to acces the app!");


    }

        function logout(){
            Session::flush();
            Auth::logout();
            return redirect(route('login'));
        }
}
