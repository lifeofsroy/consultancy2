<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AboutFeature>
 */
class AboutFeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words($nb = 2, $asText = true),
            'icon' => 'heroicon-o-user-circle',
            'desc' => $this->faker->words($nb = 15, $asText = true),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
