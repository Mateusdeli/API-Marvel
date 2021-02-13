<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $timestamps = false;
    protected $fillable = [
    ];

    public function character()
    {
        return $this->belongsTo(Characters::class);
    }

}
