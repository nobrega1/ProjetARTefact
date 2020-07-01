<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    protected $redirectTo = '../../../../../public/index.html';
    public function __construct()
    {
        $this->middleware('guest:person')->except('logout');
    }
    public function showLoginForm()
    {
        return view('auth.login.person');
    }
    public function username()
    {
        return 'email';
    }
    protected function guard()
    {
        return Auth::guard('person');
    }
}
