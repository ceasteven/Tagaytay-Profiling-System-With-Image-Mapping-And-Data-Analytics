<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Steven',
            'middlename' => null,
            'lastname' => 'Cea',
            'username' => 'steven_123',
            'email' => 'stevencea143@gmail.com',
            'role' => 'System Administrator',
            'password' => Hash::make('Fourteen@14'),
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Create more dummy users if needed
    }
}

