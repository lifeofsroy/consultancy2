<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'dob',
        'datetime',
        'service_id',
        'msz',
    ];

    protected $table = 'appointment_forms';

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
}
