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
        return $this->executeFindInTableWithRelations($characters);
    }

    public function getCharactersByIdWithRelations(int $characterId, string $table): Collection
    {
        $characters = $this->characterRepository->getByIdWithRelations($characterId, $table);
        return $this->executeFindInTableWithRelations($characters);
    }

    public function getCharacterById(int $characterId)
    {
        $defaultMessageError = "Nao foi encontrado nenhum personagem com o id {$characterId}.";
        $character = $this->characterRepository->getById($characterId);
        if (is_null($character) || empty($character)) {
            throw new Exception($defaultMessageError);
        }
        return $character;
    }

    private function executeFindInTableWithRelations(Collection $characters, string $messageError = ''): Collection
    {
        $defaultCount = 0;
        $defaultMessageError = "Nenhum registro foi encontrado.";
        if (count($characters) <= $defaultCount) {
            if (empty($messageError)) {
                throw new Exception($defaultMessageError);
            } else {
                throw new Exception($messageError);
            }
        }
        return $characters;
    }
}