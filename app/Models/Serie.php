<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'tb_series';
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
