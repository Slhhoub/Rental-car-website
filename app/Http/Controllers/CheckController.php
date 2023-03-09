<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CheckController extends Controller
{
    public function index()
    {
        $users = User::select('*')->paginate(5);
        $users = $users->appends([]);
        return view('admin.checkrole')->with(['users'=>$users]); 
    }
}
