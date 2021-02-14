<?php

namespace App\Providers;

use App\Repositories\CharacterRepository;
use App\Repositories\Interfaces\CharacterRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    public function boot()
    {
        $this->app->singleton(CharacterRepositoryInterface::class, function() { 
            return new CharacterRepository();
        });
    }

}
