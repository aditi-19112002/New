<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Aditi',
            'email' => 'aditi@example.com',
            'password' => Hash::make('yourpassword'),
        ]);
    
        User::create([
            'name' => 'Another User',
            'email' => 'another@example.com',
            'password' => Hash::make('anotherpassword'),
        ]);
    }
    
    
}
