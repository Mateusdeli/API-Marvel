<?php

class RoutesTest extends TestCase
{

    private string $urlBase;
    private string $characterId;

    protected function setUp(): void
    {
        parent::setUp();
        $this->urlBase = "v1/public/characters/";
        $this->characterId = 5;
    }

    public function test_check_route_characters()
    {
        $this->get($this->urlBase)
            ->seeStatusCode(200);
    }

    public function test_check_route_characters_with_events()
    {
        $url = $this->urlBase . "{$this->characterId}/events";
        $route = $this->get($url);

        $route->seeStatusCode(200)
        ->seeJson(["code" => 200, "status" => "Ok"])
        ->isJson();
    }

    public function test_check_route_characters_with_comics()
    {
        $url = $this->urlBase . "{$this->characterId}/comics";
        $route = $this->get($url);

        $route->seeStatusCode(200)
        ->seeJson(["code" => 200, "status" => "Ok"])
        ->isJson();
    }

    public function test_check_route_characters_with_series()
    {
        $url = $this->urlBase . "{$this->characterId}/series";
        $route = $this->get($url);

        $route->seeStatusCode(200)
        ->seeJson(["code" => 200, "status" => "Ok"])
        ->isJson();
    }

    public function test_check_route_characters_with_stories()
    {
        $url = $this->urlBase . "{$this->characterId}/stories";
        $route = $this->get($url);

        $route->seeStatusCode(200)
        ->seeJson(["code" => 200, "status" => "Ok"])
        ->isJson();
    }

}
