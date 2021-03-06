<?php

namespace App\Repositories;

use App\Repositories\Interfaces\CharacterRepositoryInterface;
use App\Models\Character;
use Illuminate\Database\Eloquent\Collection;

class CharacterRepository implements CharacterRepositoryInterface
{
    public function getAll(array $relations = []): Collection
    {
        $relationsDefault = ['comics', 'events', 'series', 'stories'];
        if (!empty($relations)) {
            return Character::with($relations)->get();
        }
        return Character::with($relationsDefault)->get();
    }

    public function getById(int $characterId): Collection
    {
        $condition = ['id', '=', $characterId];
        $relationsDefault = ['comics', 'events', 'series', 'stories'];
        return Character::with($relationsDefault)->where(...$condition)->get();
    }
    
    public function getByIdWithRelations(int $characterId, string $table): Collection
    {
        $condition = ['id', '=', $characterId];
        return Character::where(...$condition)->with($table)->get();
    }

}