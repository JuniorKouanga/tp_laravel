<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personnes')->insert([
            ['nom' => 'Kouanga', 'prenom' => 'Junior', 'sexe' => 'Homme', 'date_naissance' => '1980-01-15'],
            ['nom' => 'Mouyaya', 'prenom' => 'Deche', 'sexe' => 'Homme', 'date_naissance' => '1990-05-22'],
            ['nom' => 'Kouanga', 'prenom' => 'Jemima', 'sexe' => 'Femme', 'date_naissance' => '1997-11-30'],
        ]);
    }
}
