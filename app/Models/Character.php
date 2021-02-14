<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    const COMICS_TABLE = 'comics';
    const EVENTS_TABLE = 'events';
    const SERIES_TABLE = 'series';
    const STORIES_TABLE = 'stories';

    public $timestamps = false;
    protected $table = 'tb_characters';
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
