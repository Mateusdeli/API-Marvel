<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'tb_comics';
    protected $fillable = [
        'title',
        'modified',
        'diamondCode',
        'format',
        'character_id'
    ];

    public function character()
    {
        return $this->belongsTo(Character::class);
    }

}
