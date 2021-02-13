<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $timestamps = false;
    protected $fillable = [
        'title',
        'description',
        'resourceURI',
        'startYear',
        'endYear',
        'rating',
        'modified',
        'character_id'
    ];

    public function character()
    {
        return $this->belongsTo(Character::class);
    }

}
