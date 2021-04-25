const mix = require('laravel-mix');

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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/css/tiny-slider.css',
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/style.min.css',
], 'public/css/app.css')

mix.scripts([
    'resources/assets/js/bootstrap.bundle.min.js',
    'resources/assets/js/feather.js',
    'resources/assets/js/tiny-slider.js',
    'resources/assets/js/tiny.init.js',
    'resources/assets/js/app.js',
], 'public/js/app.js')
