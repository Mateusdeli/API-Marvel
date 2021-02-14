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
            $this->successResponse($characters);
        } 
        catch (Throwable $ex) {
            return $this->errorNotFoundResponse($ex);
        }
    }

    public function showComics(int $id)
    {
        try {
            $characterWithComics = $this->characterService->findCharactersById($id, Character::COMICS_TABLE);
            $this->successResponse($characterWithComics);
        }
        catch (Throwable $ex) {
            return $this->errorNotFoundResponse($ex);
        }
    }

}
