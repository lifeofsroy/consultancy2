<?php

namespace Database\Factories;

use App\Models\Institution;
use Illuminate\Support\Str;
use App\Models\CourseCategory;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
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

        $thumbName = 'course/thumb/' . 'thumb'. $this->faker->numberBetween(1,6). '.jpg';
        $keyword = Str::slug($title, ",");

        return [
            'title' => $title,
            'slug' => $slug,
            'doc' => 'course/doc/browcher.pdf',
            'short' => $this->faker->text(100),
            'desc' => $this->faker->paragraph(8),
            'thumb' => $thumbName,
            'image' => 'course/image/image.jpg',
            'status' => 1,
            'featured' => $this->faker->numberBetween(0,1),
            'course_category_id' => $this->faker->randomElement(CourseCategory::pluck('id')),
            'institution_id' => $this->faker->randomElement(Institution::pluck('id')),
            'meta_title' => $title,
            'meta_desc' => $this->faker->text(200),
            'meta_keyword' => $keyword,
            'created_at' => $this->faker->dateTime,
            'updated_at' => Carbon::now(),
        ];
    }
}
