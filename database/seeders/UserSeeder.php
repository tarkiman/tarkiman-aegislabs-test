<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'noreply@tarkiman.com',
            'password' => Hash::make('P@ssw0rd'),
            'name' => 'Tarkiman'
        ]);

        User::create([
            'email' => 'tarkiman.mail',
            'password' => Hash::make('P@ssw0rd'),
            'name' => 'Ta'
        ]);
    }
}
