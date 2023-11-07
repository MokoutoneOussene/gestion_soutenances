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
            'nom' => 'OUEDRAOGO',
            'prenom' => 'Ousseni',
            'email' => 'ousseneoued@gmail.com',
            'telephone' => 67186063,
            'genre' => 'Homme',
            'date_naiss' => '2003-10-13',
            'roles_id' => 1,
            'active' => 1,
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'nom' => 'NIKIEMA',
            'prenom' => 'Marie',
            'email' => 'nikarim@gmail.com',
            'telephone' => 61186063,
            'genre' => 'Femme',
            'date_naiss' => '2003-09-10',
            'roles_id' => 2,
            'active' => 1,
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'nom' => 'KY',
            'prenom' => 'Isaa',
            'email' => 'issaky@gmail.com',
            'telephone' => 61186063,
            'genre' => 'Masculin',
            'date_naiss' => '2003-09-10',
            'roles_id' => 4,
            'active' => 1,
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'nom' => 'TOE',
            'prenom' => 'Isabelle',
            'email' => 'toeisa@gmail.com',
            'telephone' => 61186063,
            'genre' => 'Feminin',
            'date_naiss' => '2003-09-10',
            'roles_id' => 3,
            'active' => 1,
            'password' => Hash::make('password'),
        ]);
    }
}
