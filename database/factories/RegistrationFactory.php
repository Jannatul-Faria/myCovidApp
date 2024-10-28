<?php

namespace Database\Factories;

use App\Models\Registration;
use App\Models\User;
use App\Models\VaccineCenter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Registration::class;
    public function definition(): array
    {
        $status= $this->faker->randomElement(['Not registered', 'Not scheduled', 'Scheduled', 'Vaccinated']);
        return [
          'date'=>Carbon::now()->toDateString(),
          'user_id'=> User::get()->random()->id,
          'vaccine_center_id'=> VaccineCenter::get()->random()->id,
          'status'=>$status,
        ];
    }
}
