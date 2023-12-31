<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CookiePolicy extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
    ];

    protected $table = 'cookie_policies';
}
