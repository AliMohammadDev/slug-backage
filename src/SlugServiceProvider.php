<?php

namespace wdd\slug;

use Illuminate\Support\ServiceProvider;



class SlugServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../src/Databases/Migrations');
    }

    public function register() {}
}
