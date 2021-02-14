<?php

namespace App\Services;

use App\Repositories\Interfaces\CharacterRepositoryInterface;
use Exception;
use Illuminate\Database\Eloquent\Collection;

class CharacterService
{
    public CharacterRepositoryInterface $characterRepository;

    public function __construct(CharacterRepositoryInterface $characterRepository) {
        $this->characterRepository = $characterRepository;
    }

    public function getAllCharacters(): Collection
    {
        $characters = $this->characterRepository->getAll();
        $messageError = "Nenhum registro foi encontrado.";
        return $this->executeFindInTableWithRelations($characters, $messageError);
    }

    public function findCharactersById(int $id, string $table): Collection
    {
        $characters = $this->characterRepository->getByIdWithRelations($id, $table);
        $tableFirstLetterUpperCase = ucfirst($table);
        $messageError = "Nenhum registro foi encontrado na tabela de {$tableFirstLetterUpperCase}.";
        return $this->executeFindInTableWithRelations($characters, $messageError);
    }

    private function executeFindInTableWithRelations(Collection $characters, string $messageError = ''): Collection
    {
        $countDefault = 0;
        if (count($characters) <= $countDefault) {
            if (!empty($messageError)) {
                throw new Exception($messageError);
            }
        }
        return $characters;
    }
}