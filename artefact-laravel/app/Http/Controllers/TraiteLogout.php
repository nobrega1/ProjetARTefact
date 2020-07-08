<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TraiteLogout extends Controller
{
    public function traitelogout(Request $request) {
        $request->session()->forget('id');
        return redirect('/');
    }
}
