<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slider>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $imageName = 'home/slider/' . 'image'. $this->faker->numberBetween(1,3). '.jpg';

        return [
            'title' => 'lets experience be your guide',
            'subtitle' => 'innovative business solution',
            'video' => 'https://www.youtube.com/embed/YjhrligRTbE',
            'url' => 'contact-us',
            'type' => $this->faker->randomElement(['left', 'middle', 'right']),
            'image' => $imageName,
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
