<?php

namespace Database\Seeders;

use App\Models\VaccineCenter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VaccineCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $namesLocations = [
            ['name' => 'Bangabandhu Sheikh Mujib Medical University', 'location' => 'Dhaka'],
            ['name' => 'Dhaka Medical College and Hospital', 'location' => 'Dhaka'],
            ['name' => 'Square Hospital', 'location' => 'Dhaka'],
            ['name' => 'Apollo Hospitals Dhaka', 'location' => 'Dhaka'],
            ['name' => 'United Hospital', 'location' => 'Dhaka'],
            ['name' => 'National Institute of Cardiovascular Diseases', 'location' => 'Dhaka'],
            ['name' => 'BIRDEM General Hospital', 'location' => 'Dhaka'],
            ['name' => 'Ibn Sina Hospital', 'location' => 'Dhaka'],
            ['name' => 'Chittagong Medical College Hospital', 'location' => 'Chittagong'],
            ['name' => 'Holy Family Red Crescent Medical College Hospital', 'location' => 'Dhaka'],
            ['name' => 'Evercare Hospital', 'location' => 'Dhaka'],
            ['name' => 'Rajshahi Medical College Hospital', 'location' => 'Rajshahi'],
            ['name' => 'Khulna Medical College Hospital', 'location' => 'Khulna'],
            ['name' => 'Rangpur Medical College Hospital', 'location' => 'Rangpur'],
            ['name' => 'Sylhet MAG Osmani Medical College Hospital', 'location' => 'Sylhet'],
            ['name' => 'Mymensingh Medical College Hospital', 'location' => 'Mymensingh'],
            ['name' => 'CMH Dhaka (Combined Military Hospital)', 'location' => 'Dhaka'],
            ['name' => 'Mitford Hospital (Sir Salimullah Medical College)', 'location' => 'Dhaka'],
            ['name' => 'Labaid Specialized Hospital', 'location' => 'Dhaka'],
            ['name' => 'Ad-din Hospital', 'location' => 'Jessore']
        ];
        
        foreach ($namesLocations as $center) {
            VaccineCenter::create([
                'name'=>$center['name'],
                'location'=>$center['location'],
                'limitation'=>rand(40,50,),
            ]);
        }
    }
}
