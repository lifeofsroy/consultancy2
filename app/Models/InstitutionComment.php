<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstitutionComment extends Model
{
    use HasFactory;

    protected $fillable = ['desc', 'institution_id', 'user_id', 'status', 'rating'];

    protected $table = "institution_comments";

    public function institution(){
        return $this->belongsTo(Institution::class, 'institution_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
