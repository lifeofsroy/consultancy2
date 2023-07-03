<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HomeWork>
 */
class HomeWorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'icon' => 'heroicon-o-user-circle',
            'title' => $this->faker->words($nb = 3, $asText = true),
            'desc' => $this->faker->text(100),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
