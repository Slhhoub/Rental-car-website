<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;




class clientcontrolle extends Controller
{
    public function index()
    {
        $client=Client::paginate(4);
        return view('client.indexclient')->with([
            'client' => $client
        ]);
        
    }

    public function indexcontra()
    {
        $clientcontra=Client::all();
        return view('contra.create')->with([
            'clientcontra' => $clientcontra
        ]);
        
    }

    public function show($id)
    {
        $showclient=Client::find($id);
        return view('client.showclient')->with([
            'showclient'=>$showclient
        ]);
    }

    public function create()
    {
        return view('client.createclient');
    }

    public function store(Request $request)
    {
        Client::create([
            'prenom' => $request -> prenom ,
            'nom' => $request -> nom ,
            'numr_cart' => $request -> numr_cart ,
            'city' => $request -> city ,
            'address' => $request -> address ,
            'telephone' => $request -> telephone ,
        ]);

        return redirect()->route('contra.index')->with('success','Customers add successflly');
    }

    public function edit($id)
    {
        $editclient=Client::find($id);
        return view('client.editclient')->with([
            'editclient'=>$editclient
        ]);
    }

    public function update(Request $request,$id)
    {
        $editclient=Client::find($id);
        $editclient->update([
            'prenom' => $request -> prenom ,
            'nom' => $request -> nom ,
            'numr_cart' => $request -> numr_cart ,
            'city' => $request -> city ,
            'address' => $request -> address ,
            'telephone' => $request -> telephone ,
        ]);
        return redirect()->route('clients.index')->with('success','Customers update successflly');
    }

    public function delete($id)
    {
        $removeclient=Client::find($id);
        $removeclient->delete();

        return redirect()->route('clients.index')->with('success','Remove customers successflly');
    }

    

    
}
