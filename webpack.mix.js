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

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
    
mix.styles([
    'public/css/bootstrap.min.css',
    'public/css/font-awesome.min.css',
    'public/css/Login-Form-Clean.css',
    'public/css/Navigation-with-Search.css',
    'public/css/Registration-Form-with-Photo.css',
    'public/css/Responsive-Blog-Library.css',
    'public/css/styles.css',
    
], 'public/css/all.css');
