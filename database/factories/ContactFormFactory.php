<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactForm>
 */
class ContactFormFactory extends Factory
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
            'purpose' => $this->faker->text(20),
            'msz' => $this->faker->text(100),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
