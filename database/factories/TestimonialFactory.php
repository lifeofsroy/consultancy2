<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $imageName = 'testimonial/' . 'image'. $this->faker->numberBetween(1,2). '.jpg';

        return [
            'name' => $this->faker->name,
            'position' => $this->faker->words($nb = 2, $asText = true),
            'image' => $imageName,
            'rating' => $this->faker->numberBetween(1, 5),
            'msz' => $this->faker->text(200),
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
