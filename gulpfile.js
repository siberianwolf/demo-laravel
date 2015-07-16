var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir.config.sourcemaps = false;
elixir.config.autoprefix = true;
elixir.config.autoprefixerOptions.browsers = ['> 0%'];
elixir.config.autoprefixerOptions.cascade = true;

elixir(function (mix) {
    mix.less([
        'app.less'
    ], 'public/css/app.css');
     mix.scripts([
         'app.js'
     ], 'public/js/app.js');
});
