<?php

use App\Repositories\CharacterRepository;
use App\Repositories\Interfaces\CharacterRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class RepositoryTest extends TestCase
{
    private CharacterRepositoryInterface $repository;
    private int $id;

    protected function setUp(): void
    {
        parent::setUp();
        $this->repository = new CharacterRepository();
        $this->id = 5;
    }

    public function test_check_get_all_characters_records()
    {
        $greaterThan = 0;
        $charactersList = $this->repository->getAll();
        $this->assertInstanceOf(Collection::class, $charactersList, 'A lista de personagens não é do tipo Collection');
        $this->assertIsNotArray($charactersList);
        $this->assertGreaterThan($greaterThan, count($charactersList), "A lista de personagens não é maior que {$greaterThan}");
    }

    public function test_check_get_all_characters_with_series()
    {
        $greaterThan = 0;
        $table = 'series';
        $charactersList = $this->repository->getByIdWithRelations($this->id, $table);
        $this->assertInstanceOf(Collection::class, $charactersList, 'A lista de personagens não é do tipo Collection');
        $this->assertIsNotArray($charactersList);
        $this->assertGreaterThan($greaterThan, count($charactersList), "A lista de personagens não é maior que {$greaterThan}");
    }

    public function test_check_get_all_characters_with_events()
    {
        $greaterThan = 0;
        $table = 'events';
        $charactersList = $this->repository->getByIdWithRelations($this->id, $table);
        $this->assertInstanceOf(Collection::class, $charactersList, 'A lista de personagens não é do tipo Collection');
        $this->assertIsNotArray($charactersList);
        $this->assertGreaterThan($greaterThan, count($charactersList), "A lista de personagens não é maior que {$greaterThan}");
    }

    public function test_check_get_all_characters_with_stories()
    {
        $greaterThan = 0;
        $table = 'stories';
        $charactersList = $this->repository->getByIdWithRelations($this->id, $table);
        $this->assertInstanceOf(Collection::class, $charactersList, 'A lista de personagens não é do tipo Collection');
        $this->assertIsNotArray($charactersList);
        $this->assertGreaterThan($greaterThan, count($charactersList), "A lista de personagens não é maior que {$greaterThan}");
    }

    public function test_check_get_all_characters_with_comics()
    {
        $greaterThan = 0;
        $table = 'comics';
        $charactersList = $this->repository->getByIdWithRelations($this->id, $table);
        $this->assertInstanceOf(Collection::class, $charactersList, 'A lista de personagens não é do tipo Collection');
        $this->assertIsNotArray($charactersList);
        $this->assertGreaterThan($greaterThan, count($charactersList), "A lista de personagens não é maior que {$greaterThan}");
    }

}
