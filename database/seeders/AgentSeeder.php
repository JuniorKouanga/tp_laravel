<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('agents')->insert([
            ['personne_id' => 1, 'date_embauche' => '2023-01-01'],
            ['personne_id' => 2, 'date_embauche' => '2023-03-15'],
            ['personne_id' => 3, 'date_embauche' => '2023-06-20'],
        ]);
    }
}
