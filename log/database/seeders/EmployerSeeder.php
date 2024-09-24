<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employer;

class EmployerSeeder extends Seeder
{
    public function run()
    {
        Employer::create(['name' => 'Employer 1']);
        Employer::create(['name' => 'Employer 2']);
        Employer::create(['name' => 'Employer 3']);
    }
}

