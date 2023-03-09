<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Client;

class ncar_client extends Controller
{
    public function index()
    {
        $carr=Car::all();
        $client=Client::paginate(4);
        return view('client.createclient')->with([
            'carr'=> $carr,
            'client' => $client
        ]);   
    }

    public function priceclient(Request $request)
    {
        $inputs=$request->all();
        $day=$inputs['day'];
        $ncarid=$inputs['ncarid'];
        $ncar=Car::find( $ncarid);
        $price=$ncar->price;
        return  $price* $day;
    }
}
