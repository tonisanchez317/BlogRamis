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
var sourcemap = "resources/assets/";

elixir(function(mix) {
    mix.sass(sourcemap + 'sass/main.scss', 'resources/assets/css/main.css');
    mix.sass(sourcemap + 'sass/ie8.scss', 'resources/assets/css/ie8.css');

    mix.copy(sourcemap + 'css', 'public/assets/css');
    mix.copy(sourcemap + 'images', 'public/images');
    mix.copy(sourcemap + 'fonts', 'public/assets/fonts');
    mix.copy(sourcemap + 'js', 'public/assets/js');
});
