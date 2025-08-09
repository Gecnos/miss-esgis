<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'nom' => 'Super',
            'email' => 'admin@example.com',
            'mot_de_passe' => Hash::make('password'), // change le mot de passe après
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
