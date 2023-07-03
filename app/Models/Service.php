<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'short',
        'doc',
        'desc',
        'thumb',
        'image',
        'status',
        'featured',
        'service_category_id',
        'meta_title',
        'meta_keyword',
        'meta_desc',
    ];

    protected $table = 'services';

    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class);
    }

    public function serviceComments()
    {
        return $this->hasMany(ServiceComment::class);
    }

    public function appointmentForms()
    {
        return $this->hasMany(AppointmentForm::class);
    }
}
