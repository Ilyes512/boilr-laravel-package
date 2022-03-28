<?php

declare(strict_types=1);

namespace {{ camelcase (snakecase Vendor) }}\{{ camelcase (snakecase PackageName) }};

use Illuminate\Support\ServiceProvider;

class {{ camelcase (snakecase PackageName) }}ServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/{{ snakecase PackageName }}.php', '{{ snakecase PackageName }}');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__ . '/../config/{{ snakecase PackageName }}.php' => $this->app->configPath('{{ snakecase PackageName }}.php'),
        ], '{{ kebabcase PackageName }}-config');
    }
}
