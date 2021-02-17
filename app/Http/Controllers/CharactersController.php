<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\ResponseTrait;
use App\Models\Character;
use App\Services\CharacterService;
use Illuminate\Http\Request;
use Throwable;

class CharactersController extends Controller
{

    use ResponseTrait;

    private CharacterService $characterService;

    public function __construct(CharacterService $characterService)
    {
        $this->characterService = $characterService;
    }

    public function index()
    {
        try {
            $characters = $this->characterService->getAllCharacters();
            return $this->successResponse($characters);
        } 
        catch (Throwable $ex) {
            return $this->errorNotFoundResponse($ex);
        }
    }

    public function find(int $characterId)
    {
        try {
            $character = $this->characterService->getCharacterById($characterId);
            return $this->successResponse($character);
        } 
        catch (Throwable $ex) {
            return $this->errorNotFoundResponse($ex);
        }
    }

    public function showComics(int $characterId)
    {
        return $this->searchCharacterWithRelations($characterId, Character::COMICS_TABLE);
    }

    public function showEvents(int $characterId)
    {
        return $this->searchCharacterWithRelations($characterId, Character::EVENTS_TABLE);
    }

    public function showSeries(int $characterId)
    {
        return $this->searchCharacterWithRelations($characterId, Character::SERIES_TABLE);
    }

    public function showStories(int $characterId)
    {
        return $this->searchCharacterWithRelations($characterId, Character::STORIES_TABLE);
    }

    private function searchCharacterWithRelations(int $characterId, string $table) {
        try {
            $characterWithComics = $this->characterService->getCharactersByIdWithRelations($characterId, $table);
            return $this->successResponse($characterWithComics);
        }
        catch (Throwable $ex) {
            return $this->errorNotFoundResponse($ex);
        }
    }
}
