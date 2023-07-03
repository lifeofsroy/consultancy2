<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Institution>
 */
class InstitutionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->unique()->words($nb = 10, $asText = true);
        $slug = Str::slug($title, "-");
        $thumbName = 'institution/thumb/' . 'thumb' . $this->faker->numberBetween(1, 3) . '.jpg';
        $imageName = 'institution/image/' . 'image' . $this->faker->numberBetween(1, 3) . '.jpg';

        $keyword = Str::slug($title, ",");

        return [
            'title' => $title,
            'slug' => $slug,
            'thumb' => $thumbName,
            'image' => $imageName,
            'doc' => 'institution/sample.pdf',
            'short' => $this->faker->text(100),
            'location' => $this->faker->word(4),
            'type' => $this->faker->word(2),
            'contact' => $this->faker->unique()->safeEmail(),
            'desc' => $this->faker->paragraph(8),
            'status' => 1,
            'featured' => 1,
            'meta_title' => $title,
            'meta_desc' => $this->faker->text(200),
            'meta_keyword' => $keyword,
            'created_at' => $this->faker->dateTime,
            'updated_at' => Carbon::now(),
        ];
    }
}
