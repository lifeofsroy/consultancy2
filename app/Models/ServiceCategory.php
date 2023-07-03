<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'short',
        'icon',
        'image',
        'meta_title',
        'meta_keyword',
        'meta_desc',
        'status',
        'featured',
    ];

    protected $table = 'service_categories';

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
