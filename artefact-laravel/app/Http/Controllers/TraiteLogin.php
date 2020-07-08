<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;

class TraiteLogin extends Controller
{
    public function traitelogin(Request $request) {

        $email = $request->input('email');
        $password = $request->input('password');


            

        $PersonMail = Person::where('email', $email )->first();
     //   $PersonPass = Person::where('password', $password )->first();


        if(Hash::check($password, $PersonMail->password)){
            $request->session()->put('id',$PersonMail->id);
            return view('dashboard');
        } else {
            return view('acceuil');
        }
    }
}
