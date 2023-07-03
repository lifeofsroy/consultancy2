<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AboutWelcome>
 */
class AboutWelcomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $imageName = 'about/welcome/' . 'image'. $this->faker->numberBetween(1,4). '.jpg';

        return [
            'section' => $this->faker->words($nb = 2, $asText = true),
            'title' => $this->faker->words($nb = 3, $asText = true),
            'desc' => $this->faker->paragraph(10),
            'image' => $imageName,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
