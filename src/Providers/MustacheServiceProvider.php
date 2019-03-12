<?php

namespace PrivacyZeker\LaravelMustache\Providers;

use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;
use Mustache\Engine;

class MustacheServiceProvider extends ServiceProvider
{
        public function boot()
        {

        }


        public function register()
        {
                $this->app->singleton('mustache', function (Container $app) {
                        return new Engine();
                });
        }


        public function provides()
        {
                return [
                        'mustache',
                ];
        }
}