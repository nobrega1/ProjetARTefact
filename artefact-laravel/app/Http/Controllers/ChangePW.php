<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangePW extends Controller
{
    public function redirectpage(Request $request) {
        return view('changePW');
    }
    public function traitechangePW(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        $passwordnew = $request->input('passwordnew');
        $PersonMail = Person::where('email', $email )->first();
        if(Hash::check($password, $PersonMail->password)){
            $PersonMail->password = $passwordnew;
            return view('dashboard');
        } else {
            return view('changePW');
        }
    }
}
