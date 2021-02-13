<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
    use HasFactory;

    protected $timestamps = false;
    protected $fillable = [
        'name', 
        'description', 
        'resourceURI', 
        'modified'
    ];

    public function comics()
    {
        return $this->hasMany(Comics::class);
    }

}
