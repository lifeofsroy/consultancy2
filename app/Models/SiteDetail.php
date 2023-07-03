<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_title',
        'site_desc',
        'site_keys',
        'title_color',
        'button_color',
        'active_color',
        'beard_color',
        'icon_color',
        'tab_color',
    ];

    protected $table = 'site_details';
}
