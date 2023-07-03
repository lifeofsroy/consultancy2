<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Institution extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'short',
        'desc',
        'location',
        'type',
        'doc',
        'contact',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_desc',
        'featured',
    ];

    public function institutionComments()
    {
        return $this->hasMany(InstitutionComment::class);
    }

    public function appointmentForms()
    {
        return $this->hasMany(AppointmentForm::class);
    }
}
