<?php

namespace App\Http\Controllers;


use DateTime;
use App\Models\Contra;


use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\PDF;

class hpconroller extends Controller
{

    public function index()
    {
        $contract=Contra::paginate(6);
        return view('contra.index')->with([
            'contract'=>$contract,
        ]);
    }
    public function show($id)
    {
    $showcontra=Contra::find($id);
    $pdf = PDF::loadView('contra.show',compact('showcontra'));
    return $pdf->download('invoice.pdf');
    }

  
    public function create()
    {
        return view('contra.create');
    }

    public function store(Request $request)
    {
        $sdate= $request->star_date;
        $edate= $request->end_date;
        $datetime1= new DateTime( $sdate);
        $datetime2= new DateTime( $edate);
        $interval=$datetime1->diff($datetime2);
        $day=$interval->format('%a');


        Contra::create([
            'customer' => $request -> customer ,
            'car' => $request -> car ,
            'star_date' => $request -> star_date ,
            'end_date' => $request -> end_date ,
            'duration' => $request -> duration ,
            'prix' => $request -> prix ,
        ]);
        return redirect()->route('contraform.index')->with('success','Contra add successflly');

    }

    public function edit($id)
    {
        $editcontra=Contra::find($id);
        return view('contra.edit')->with([
            'editcontra' => $editcontra
        ]);
    }

    public function update(Request $request,$id)
    {
        $editcontra=Contra::find($id);
        $editcontra->update([
            'customer' => $request -> customer ,
            'car' => $request -> car ,
            'star_date' => $request -> star_date ,
            'end_date' => $request -> end_date ,
            'duration' => $request -> duration ,
            'prix' => $request -> prix ,
        ]);
        return redirect()->route('contraform.index')->with('success','Contra update successflly');
    }

    public function delete($id)
    {
        $removecontra=Contra::find($id);
        $removecontra->delete();

        return redirect()->route('contraform.index')->with('success','Remove contra successflly');
    }



}
