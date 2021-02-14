<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface CharacterRepositoryInterface
{
    public function getAll(array $relations = []): Collection;
    public function getByIdWithRelations(int $id, string $table): Collection;
}