<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partner>
 */
class PartnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $imageName = 'partner/' . 'image'. $this->faker->numberBetween(1,5). '.png';

        return [
            'name' => $this->faker->name,
            'image' => $imageName,
            'status' => $this->faker->numberBetween(0, 1),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
