<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    use HasFactory;

    protected $timestamps = false;
    protected $fillable = [
        'title',
        'modified',
        'diamondCode',
        'format',
        'character_id'
    ];

    public function character()
    {
        return $this->belongsTo(Characters::class);
    }

}
