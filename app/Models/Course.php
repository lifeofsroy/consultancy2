<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'short',
        'desc',
        'doc',
        'thumb',
        'image',
        'status',
        'featured',
        'meta_title',
        'meta_keyword',
        'meta_desc',
        'course_category_id',
    ];

    protected $table = 'courses';

    public function courseCategory()
    {
        return $this->belongsTo(CourseCategory::class);
    }

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

    public function courseComments()
    {
        return $this->hasMany(CourseComment::class);
    }

    public function appointmentForms()
    {
        return $this->hasMany(AppointmentForm::class);
    }
}
