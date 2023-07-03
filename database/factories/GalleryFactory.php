<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $imageName = 'gallery/'.'image'. $this->faker->numberBetween(1,4). '.jpg';

        return [
            'title' => $this->faker->words($nb = 2, $asText = true),
            'location' => $this->faker->words($nb = 1, $asText = true),
            'image' => $imageName,
            'status' => 1,
            'featured' => $this->faker->numberBetween(0, 1),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
