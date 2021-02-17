# API Marvel (Lumen PHP Framework)

API da Marvel desenvolvida utilizando o micro-framework do Laravel chamado Lumen

## Pré Requisitos

> Docker <br>
> Composer <br>
> PHP 7.3 ou superior <br>

## Comandos para Deploy Local

> docker-compose up -d <br>
> composer install <br>
> php artisan migrate <br>
> php artisan db:seed <br>
> php -S localhost:5000 -t public/ <br>

## Executar os Testes
> ./vendor/bin/phpunit tests <br>

## Endpoints
> http://localhost:5000/v1/public/characters <br>
> http://localhost:5000/v1/public/characters/{characterId} <br>
> http://localhost:5000/v1/public/characters/{characterId}/comics <br>
> http://localhost:5000/v1/public/characters/{characterId}/events <br>
> http://localhost:5000/v1/public/characters/{characterId}/series <br>
> http://localhost:5000/v1/public/characters/{characterId}/stories <br>
