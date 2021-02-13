<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
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
        return $this->hasMany(Comic::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function series()
    {
        return $this->hasMany(Serie::class);
    }

    public function stories()
    {
        return $this->hasMany(Storie::class);
    }

}
