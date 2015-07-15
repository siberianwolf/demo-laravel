<?php

if ($app->environment('local')) {
    $app->register('Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider');
    $app->register('Barryvdh\Debugbar\ServiceProvider');

    $app->alias('Debugbar', 'Barryvdh\Debugbar\Facade');
}