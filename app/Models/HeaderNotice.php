<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderNotice extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status',
    ];

    protected $table = "header_notices";
}
