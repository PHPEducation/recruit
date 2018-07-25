let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
mix.copyDirectory('resources/assets/fonts', 'public/fonts');
mix.copyDirectory('resources/assets/js_raw', 'public/js');
mix.copyDirectory('resources/assets/css', 'public/css');


/**
 * Mix copy file from Bower component to public folder
 */
mix.copyDirectory('bower_components/jquery', 'public/vendor/third-party/jquery');
mix.copyDirectory('bower_components/jquery-ui', 'public/vendor/third-party/jquery-ui');

