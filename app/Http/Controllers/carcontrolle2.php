<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Faker\Provider\Lorem;

class carcontrolle2 extends Controller
{
    public function index()
    {
        $car=Car::paginate(4);
        return view('car.indexcar')->with([
            'car' =>  $car
        ]);
        
    }
   
    

    public function show($id)
    {
        $showcar=Car::find($id);
        return view('car.showcar')->with([
            'showcar'=> $showcar
        ]);
    }

    public function create()
    {
        return view('car.createcar');
    }

    public function store(Request $request)
    {
        if($request->has('img_car'))
        {
            $file=$request->img_car;
            $image_name=time().'_'. $file->getClientOriginalName();
            $file->move(public_path('uploads'), $image_name);
        }
        Car::create([
            'n_car'=> $request -> n_car ,
            'type_car'=>$request -> type_car,
            'Date_taking'=>$request -> Date_taking,
            'price'=>$request -> price,
            'informations'=>$request -> informations ,
            'img_car'=> $image_name,
        ]);
        return redirect()->route('contra.index')->with('success','Car add successflly');
    }

    public function edit($id)
    {
        $editcar=Car::find($id);
        return view('car.edit')->with([
            'editcar' => $editcar
        ]);
    }

    public function update(Request $request,$id)
    {
        $editcar=Car::find($id);
        if($request->has('img_car'))
        {
            $file=$request->img_car;
            $image_name=time().'_'. $file->getClientOriginalName();
            $file->move(public_path('uploads'), $image_name);
            unlink(public_path('uploads').'/'. $editcar->img_car);
            $editcar->img_car= $image_name;
        }
        $editcar->update([
            'n_car'=> $request -> n_car ,
            'type_car'=>$request -> type_car,
            'Date_taking'=>$request -> Date_taking,
            'price'=>$request -> price,
            'img_car'=>$editcar->img_car,
            'informations'=>$request -> informations,
        ]);
        return redirect()->route('car.index')->with('success','Car update successflly');
    }

    public function delete($id)
    {
        $deletecar=Car::find($id);
        $deletecar->delete();
        return redirect()->route('car.index')->with('success','Car remove successflly');
    }
}
