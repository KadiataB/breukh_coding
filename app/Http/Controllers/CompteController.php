<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompteRequest;
use App\Http\Requests\UpdateCompteRequest;
use App\Models\Client;
use App\Models\Compte;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Request;

class CompteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Compte::all();
    }

    /**
     * Show the form for creating a new resource.
     */

    public function store(Request $request)
    {
        $clientId= $request->client_id;
        $client =Client::find($clientId);
        $fournisseurs=['OM','WV','WR','CB'];
        $request->validate([
            "fournisseur"=>['required','string', Rule::in($fournisseurs)],
            // "numero"=>'required',
            "solde"=>['required','numeric'],
            "client_id"=>['required','exists:clients,id'],
        ]);

        $fournisseur = $request->fournisseur;
        $clientNumber = $client->numero;
        $numero = $fournisseur . '_' . $clientNumber;

        Compte::create([
        'fournisseur' => $fournisseur,
        'solde' => $request->solde,
        'client_id' => $clientId,
        'numero' => $numero,
        ]);
    }

    public function find(Request $request, $id)
    {
     return Compte::find($id);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(Compte $compte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compte $compte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompteRequest $request, Compte $compte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compte $compte)
    {
        //
    }
}
