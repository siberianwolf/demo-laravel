<?php

if ($app->environment('local')) {
    $app->register(Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
    $app->register(Barryvdh\Debugbar\ServiceProvider::class);

    $app->alias('Debugbar', Barryvdh\Debugbar\Facade::class);
}