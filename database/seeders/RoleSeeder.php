<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'libelle' => 'Admin',
        ]);

        DB::table('roles')->insert([
            'libelle' => 'Apprenant',
        ]);

        DB::table('roles')->insert([
            'libelle' => 'Secretaire courrier',
        ]);

        DB::table('roles')->insert([
            'libelle' => 'Manager',
        ]);
    }
}
