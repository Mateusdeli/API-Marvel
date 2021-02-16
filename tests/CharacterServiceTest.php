<?php

use App\Repositories\CharacterRepository;
use App\Services\CharacterService;
use Illuminate\Database\Eloquent\Collection;

class CharacterServiceTest extends TestCase
{
    private CharacterService $service;
    private int $id;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = new CharacterService(new CharacterRepository());
        $this->id = 5;
    }

    public function test_get_all_characters()
    {
        $greaterThan = 0;
        $charactersList = $this->service->getAllCharacters();

        $this->assertNotInstanceOf(Exception::class, $charactersList, 'Foi retornado um objeto do tipo Exception contendo o erro');
        $this->assertInstanceOf(Collection::class, $charactersList, 'A lista de personagens não é do tipo Collection');

        $this->assertIsNotArray($charactersList);

        $this->assertGreaterThan($greaterThan, count($charactersList), "A lista de personagens não é maior que {$greaterThan}");
    }

    public function test_find_characters_in_comics_by_id()
    {
        $greaterThan = 0;
        $table = 'comics';
        $charactersList = $this->service->getAllCharacters($this->id, $table);
        $this->assertNotInstanceOf(Exception::class, $charactersList, 'Foi retornado um objeto do tipo Exception contendo o erro');
        $this->assertInstanceOf(Collection::class, $charactersList, 'A lista de personagens não é do tipo Collection');
        $this->assertIsNotArray($charactersList);
        $this->assertGreaterThan($greaterThan, count($charactersList), "A lista de personagens não é maior que {$greaterThan}");
    }

    public function test_find_characters_in_events_by_id()
    {
        $greaterThan = 0;
        $table = 'events';
        $charactersList = $this->service->getAllCharacters($this->id, $table);
        $this->assertNotInstanceOf(Exception::class, $charactersList, 'Foi retornado um objeto do tipo Exception contendo o erro');
        $this->assertInstanceOf(Collection::class, $charactersList, 'A lista de personagens não é do tipo Collection');
        $this->assertIsNotArray($charactersList);
        $this->assertGreaterThan($greaterThan, count($charactersList), "A lista de personagens não é maior que {$greaterThan}");
    }

    public function test_find_characters_in_series_by_id()
    {
        $greaterThan = 0;
        $table = 'comics';
        $charactersList = $this->service->getAllCharacters($this->id, $table);
        $this->assertNotInstanceOf(Exception::class, $charactersList, 'Foi retornado um objeto do tipo Exception contendo o erro');
        $this->assertInstanceOf(Collection::class, $charactersList, 'A lista de personagens não é do tipo Collection');
        $this->assertIsNotArray($charactersList);
        $this->assertGreaterThan($greaterThan, count($charactersList), "A lista de personagens não é maior que {$greaterThan}");
    }

    public function test_find_characters_in_stories_by_id()
    {
        $greaterThan = 0;
        $table = 'comics';
        $charactersList = $this->service->getAllCharacters($this->id, $table);
        $this->assertNotInstanceOf(Exception::class, $charactersList, 'Foi retornado um objeto do tipo Exception contendo o erro');
        $this->assertInstanceOf(Collection::class, $charactersList, 'A lista de personagens não é do tipo Collection');
        $this->assertIsNotArray($charactersList);
        $this->assertGreaterThan($greaterThan, count($charactersList), "A lista de personagens não é maior que {$greaterThan}");
    }

}
