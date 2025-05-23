<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function login(){
    return view('components/auth/login');
   }

   public function loginpost(Request $request){


        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Login success
            return redirect()->route('postblog'); // or wherever you want to go
        }
    
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);

   }

   public function register(){
    return view('components/auth/register');
   }
   
   public function postregister(Request $request){
    $request->validate(
        [
            "name"=>"required",
             "email" => "required|email|unique:users,email",
             "password" => "required",
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if($user->save()){
            return redirect("/register")->with("success",("user created"));

        }
        return redirect("/register")->with("error",("fail to create a new user"));
   }
   

}
