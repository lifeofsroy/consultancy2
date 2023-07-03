<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Service;
use App\Models\Institution;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AppointmentForm>
 */
class AppointmentFormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->numberBetween(9876543210, 9876543999),
            'dob' => Carbon::now(),
            'service_id' => $this->faker->randomElement(Service::pluck('id')),
            'datetime' => Carbon::now(),
            'msz' => $this->faker->text(100),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
