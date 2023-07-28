<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        return Client::all();
    }

    public function find(Request $request, $id)
    {
     return Client::find($id);
    }
    public function store(Request $request)
    {
           $validated= $request->validate([
                'nom'=>'required',
                'prenom'=>'required',
                'numero'=>['required', 'regex:/^(70|75|76|77|78)[0-9]{7}$/']
           ]);
        Client::create($validated);
    }

    public function getCompte($id)
    {
        $client= Client::find($id);
        // dd($compte);
        return $client->comptes;
    }
}

