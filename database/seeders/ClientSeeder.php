<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients=[
            [

            'nom'=>'ba',
            'prenom'=>'kadiata',
            'numero'=>'772717905',

            ],
            [

            'nom'=>'aidara',
            'prenom'=>'mamya',
            'numero'=>'772717906',

            ],
            [

            'nom'=>'sow',
            'prenom'=>'ibrahima',
            'numero'=>'772717907',

            ],
            ];
            \App\Models\Client::insert($clients);

    }
}
