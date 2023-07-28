<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Transaction;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Transaction::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        Transaction::create([
            ...$request->validate([
                'type' => ['required','string',Rule::in('depot', 'retrait', 'transfert')],
                'montant' => ['required', 'numeric'],
                'date' => ['required', 'date'],
                'client_id' => ['required'],
                'compte_id' => ['required'],
            ]),
            'code' => $request->code,
            ]);
    }


    public function find(Request $request, $id)
    {
     return Transaction::find($id);
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
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
