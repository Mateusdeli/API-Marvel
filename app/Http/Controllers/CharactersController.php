<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\ResponseTrait;
use App\Models\Character;
use App\Services\CharacterService;
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

    public function showComics(int $characterId)
    {
        try {
            $characterWithComics = $this->characterService->findCharactersById($characterId, Character::COMICS_TABLE);
            return $this->successResponse($characterWithComics);
        }
        catch (Throwable $ex) {
            return $this->errorNotFoundResponse($ex);
        }
    }

    public function showEvents(int $characterId)
    {
        try {
            $characterWithComics = $this->characterService->findCharactersById($characterId, Character::EVENTS_TABLE);
            return $this->successResponse($characterWithComics);
        }
        catch (Throwable $ex) {
            return $this->errorNotFoundResponse($ex);
        }
    }

    public function showSeries(int $characterId)
    {
        try {
            $characterWithComics = $this->characterService->findCharactersById($characterId, Character::SERIES_TABLE);
            return $this->successResponse($characterWithComics);
        }
        catch (Throwable $ex) {
            return $this->errorNotFoundResponse($ex);
        }
    }

    public function showStories(int $characterId)
    {
        try {
            $characterWithComics = $this->characterService->findCharactersById($characterId, Character::STORIES_TABLE);
            return $this->successResponse($characterWithComics);
        }
        catch (Throwable $ex) {
            return $this->errorNotFoundResponse($ex);
        }
    }
}
