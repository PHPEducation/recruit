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
mix.copyDirectory('resources/assets/images', 'public/images');
mix.copyDirectory('resources/assets/css_login', 'public/css_login');


/**
 * Mix copy file from Bower component to public folder
 */
// Jquery
mix.copyDirectory('bower_components/jquery', 'public/vendor/third-party/jquery');

// Jquery-UI
mix.copyDirectory('bower_components/jquery-ui', 'public/vendor/third-party/jquery-ui');

// Bootstrap
mix.copyDirectory('bower_components/bootstrap/dist', 'public/vendor/third-party/bootstrap');

// Font-awesome
mix.copyDirectory('bower_components/font-awesome/css', 'public/vendor/third-party/font-awesome/css');
mix.copyDirectory('bower_components/font-awesome/fonts', 'public/vendor/third-party/font-awesome/fonts');

// Wow.js
mix.copy('bower_components/wow/dist/wow.js', 'public/vendor/third-party/wow/wow.js');
mix.copy('bower_components/wow/css/libs/animate.css', 'public/vendor/third-party/wow/animate.css');
