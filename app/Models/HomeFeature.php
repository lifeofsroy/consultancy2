<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'icon',
        'desc',
        'color',
    ];

    protected $table = 'home_features';
}
