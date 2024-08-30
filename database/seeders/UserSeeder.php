<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'junior.kouanga', 'email' => 'junior.kouanga@gmail.com', 'password' => Hash::make('Azerty@2024'), 'agent_id' => 1, 'telephone' => '065059763', 'code_pin' => '7777'],
            ['name' => 'deche.mouyaya ', 'email' => 'deche.mouyaya@gmail.com', 'password' => Hash::make('Azerty@2024'), 'agent_id' => 2, 'telephone' => '069316991', 'code_pin' => '1234'],
            ['name' => 'jemima.kouanga', 'email' => 'jemima@gmail.com', 'password' => Hash::make('Azerty@2023'), 'agent_id' => 3, 'telephone' => '055316991', 'code_pin' => '0707'],
        ]);
    }
}
