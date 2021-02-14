<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storie extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'tb_stories';
    protected $fillable = [
        'title',
        'description',
        'resourceURI',
        'type',
        'modified',
        'character_id'
    ];

    public function character()
    {
        return $this->belongsTo(Character::class);
    }

}
