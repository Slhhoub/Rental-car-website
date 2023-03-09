<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logoutcontolle extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome.index');
    }
}
