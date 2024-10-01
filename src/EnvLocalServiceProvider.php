<?php

namespace LaravelEnvLocal;

use Illuminate\Support\ServiceProvider;
use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;

class EnvLocalServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        // No services to register.
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $app = $this->app;

        // Get the environment file path.
        $envPath = $app->environmentPath();

        // Define the .env.local file.
        $localEnvFile = '.env.local';

        // Load .env.local if it exists.
        if (file_exists($envPath . '/' . $localEnvFile)) {
            try {
                // Load variables from .env.local, allowing them to override existing ones.
                Dotenv::createMutable($envPath, $localEnvFile)->load();
            } catch (InvalidPathException $e) {
                // Handle the exception if needed.
                // For now, we'll silently ignore it.
            }
        }
    }
}
