<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeWelcome extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'desc',
        'image',
        'image1',
        'image2',
        'icon1',
        'title1',
        'text1',
        'icon2',
        'title2',
        'text2',
    ];

    protected $table = 'home_welcomes';
}
