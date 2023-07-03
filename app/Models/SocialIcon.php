<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialIcon extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'url',
    ];

    protected $table = 'social_icons';
}
