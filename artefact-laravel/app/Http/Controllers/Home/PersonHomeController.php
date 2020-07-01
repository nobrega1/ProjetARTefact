<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:person');
    }
    public function index()
    {
        return view('home.person');
    }
}
