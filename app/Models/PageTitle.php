<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageTitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'page',
        'heading',
        'image',
    ];

    protected $table = 'page_titles';
}
