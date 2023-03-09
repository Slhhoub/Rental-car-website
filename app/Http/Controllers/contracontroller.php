<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contra;
use App\Models\Client;
use App\Models\Car;
class contracontroller extends Controller
{
    public function index()
    {
        $clients=Client::all();
        $car=Car::all();
        return view('contra.create')->with([
            'clients'=>$clients,
            'car'=> $car
        ]);
    }

    public function function_ajax(Request $request){
        $inputs=$request->all();
        $day=$inputs['day'];
        $carid=$inputs['carid'];
        $car=Car::find($carid);
        $price= $car->price;
        return $day*$price;
    }



}
