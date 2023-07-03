<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutWelcome extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'section',
        'desc',
        'image',
    ];

    protected $table = "about_welcomes";
}
