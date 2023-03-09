<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Client;

class ourcaradmincontrolle extends Controller
{
    public function index()
    {
        $ourcar=Car::paginate(6);
        $client=Client::all();
        return view('car.ourcaradmin')->with([
            'ourcar'=> $ourcar,
            'client'=> $client
        ]);
    }

    public function show($id)
    {
        $ourcar=Car::find($id);
        return view('car.ourcaradmin')->with([
            'ourcar'=> $ourcar
        ]);
    }

    
}
