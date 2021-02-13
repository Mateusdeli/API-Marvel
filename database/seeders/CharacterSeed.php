<?php

namespace Database\Seeders;

use App\Models\Character;
use Database\Factories\ComicFactory;
use Database\Factories\EventFactory;
use Database\Factories\SerieFactory;
use Database\Factories\StorieFactory;
use Illuminate\Database\Seeder;

class CharacterSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Character::factory()
            ->count(10)
            ->has(new ComicFactory)
            ->has(new EventFactory)
            ->has(new SerieFactory)
            ->has(new StorieFactory)
            ->create();
    }
}
