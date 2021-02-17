<?php

namespace App\Repositories\Interfaces;

use App\Models\Character;
use Illuminate\Database\Eloquent\Collection;

interface CharacterRepositoryInterface
{
    public function getAll(array $relations = []): Collection;
    public function getById(int $characterId): Collection;
    public function getByIdWithRelations(int $characterId, string $table): Collection;
}