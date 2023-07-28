<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comptes=[
            [

                'fournisseur'=>'OM',
                'numero'=>'OM_772717905',
                'solde'=>1000,
                'client_id'=>'1',

            ],
            [

                'fournisseur'=>'WV',
                'numero'=>'WV_772717906',
                'solde'=>1000,
                'client_id'=>'2',

                ],
            [

                'fournisseur'=>'CB',
                'numero'=>'CB_772717903',
                'solde'=>1000,
                'client_id'=>'1',

                ],
            ];
            \App\Models\Compte::insert($comptes);

    }
}
