<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::select('*')->paginate(5);
        $users = $users->appends([]);
        return view('admin.tableuser')->with(['users'=>$users]); 
    }

    public function create()
    {
        return view('admin.registeradmin');
    }

    public function store(Request $request)
    {
        User::create([
            'name'=> $request -> name ,
            'email'=>$request -> email,
            'role'=>$request -> role,
           // 'Checkrole'=>implode(',',$request -> Checkrole),
            'password'=> Hash::make($request -> password),
            'password_confirmation'=>$request -> password ,
        ]);
        return redirect()->route('tableuser.index')->with('success','user add successflly');
    }

    public function edit($id)
    {
        $edituser=User::find($id);
        return view('admin.editadmin')->with([
            'edituser'=>$edituser
        ]);
    }

    public function update(Request $request,$id)
    {
        $edituser=User::find($id);
        $edituser->update([
            'name'=> $request -> name ,
            'email'=>$request -> email,
            'role'=>$request -> role,
            'password'=>$request -> password,
        ]);
        return redirect()->route('tableuser.index')->with('success',' update successflly');
    }

    public function delete($id)
    {
        $removeregester=User::find($id);
        $removeregester->delete();

        return redirect()->route('tableuser.index')->with('success','Remove successflly');
    }
}
