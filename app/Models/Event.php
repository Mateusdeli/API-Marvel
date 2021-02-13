<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $timestamps = false;
    protected $fillable = [
        'title',
        'description',
        'resourceURI',
        'modified',
        'start',
        'end',
        'character_id'
    ];

    public function character()
    {
        return $this->belongsTo(Character::class);
    }

}
