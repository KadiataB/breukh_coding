<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactions=[
            [

                'type'=>'depot',
                'montant'=>1000,
                'date'=>'2023-07-28',
                'client_id'=>'1',
                'compte_id'=>'1',


            ],
            [

                'type'=>'depot',
                'montant'=>500,
                'date'=>'2023-07-28',
                'client_id'=>'2',
                'compte_id'=>'2',


            ],
            [

                'type'=>'depot',
                'montant'=>10000,
                'date'=>'2023-07-28',
                'client_id'=>'3',
                'compte_id'=>'3',


            ],
            ];
            \App\Models\Transaction::insert($transactions);
    }
}
