<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HeaderNotice>
 */
class HeaderNoticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(50),
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
