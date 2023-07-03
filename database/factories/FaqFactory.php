<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faq>
 */
class FaqFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'question' => $this->faker->realText(30),
            'answer' => $this->faker->text(100),
            'status' => 1,
            'featured' => $this->faker->numberBetween(0, 1),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
