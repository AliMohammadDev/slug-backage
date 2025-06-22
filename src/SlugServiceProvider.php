<?php

namespace wdd\slug;

use Illuminate\Support\ServiceProvider;



class SlugServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../src/Databases/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../src/views/', 'wdd/slug');
    }

    public function register() {}
}
