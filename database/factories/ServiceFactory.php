<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
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
        $thumbName = 'service/thumb/'. 'thumb'. $this->faker->numberBetween(1,6). '.jpg';
        $keyword = Str::slug($title, ",");

        return [
            'thumb' => $thumbName,
            'image' => 'service/image/image.jpg',
            'title' => $title,
            'slug' => $slug,
            'doc' => 'browcher.pdf',
            'short' => $this->faker->text(100),
            'desc' => $this->faker->paragraph(8),
            'status' => 1,
            'featured' => $this->faker->numberBetween(0,1),
            'service_category_id' => $this->faker->randomElement(ServiceCategory::pluck('id')),
            'meta_title' => $title,
            'meta_desc' => $this->faker->text(200),
            'meta_keyword' => $keyword,
            'created_at' => $this->faker->dateTime,
            'updated_at' => Carbon::now(),
        ];
    }
}
