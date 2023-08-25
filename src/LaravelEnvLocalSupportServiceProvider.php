<?php

namespace Akmnahid\LaravelEnvLocalSupport;

use Illuminate\Support\ServiceProvider;

class LaravelEnvLocalSupportServiceProvider extends ServiceProvider
{
    public function register()
    {
        // If .env.local exists, use it instead of the default .env
        if (file_exists(base_path('.env.local'))) {
            $this->loadEnvFrom(base_path('.env.local'));
        }
    }

    protected function loadEnvFrom($path)
    {
        if ($this->app->environment() !== 'production') {
            $this->app->loadEnvironmentFrom($path);
        }
    }
}
