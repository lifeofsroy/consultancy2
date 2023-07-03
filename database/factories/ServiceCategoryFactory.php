<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceCategory>
 */
class ServiceCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $catName = $this->faker->unique()->words($nb = 2, $asText = true);
        $slug = Str::slug($catName, "-");

        $imageName = 'service/category/image/'.'image'. $this->faker->numberBetween(1,6). '.jpg';

        $keyword = Str::slug($catName, ",");

        return [
            'name' => $catName,
            'slug' => $slug,
            'icon' => 'heroicon-o-user-circle',
            'image' => $imageName,
            'short' => $this->faker->text(50),
            'meta_title' => $this->faker->text(7),
            'meta_desc' => $this->faker->text(200),
            'meta_keyword' => $keyword,
            'status' => 1,
            'is_footer' => $this->faker->numberBetween(0,1),
            'created_at' => $this->faker->dateTime,
            'updated_at' => Carbon::now(),
        ];
    }
}
