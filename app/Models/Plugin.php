<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_wh',
        'is_ph',
        'is_tw',
        'ph_no',
        'wh_no',
        'tw_id',
    ];

    protected $table = "plugins";
}
