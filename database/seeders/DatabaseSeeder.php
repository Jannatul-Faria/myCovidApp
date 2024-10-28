<?php

namespace Database\Seeders;

use App\Models\Registration;
use App\Models\User;
use App\Models\VaccineCenter;
use Database\Factories\UserFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(100)->create();
        $this->call([
            VaccineCenterSeeder::class,
            RegistrationSeeder::class,
        ]);
        

        
    }
}
