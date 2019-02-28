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
   .sass('resources/sass/style.scss', 'public/css');


mix.sass('resources/sass/app.sass', 'public/css')
   .sass('resources/sass/main.sass', 'public/css')
   .sass('resources/sass/style-about.sass', 'public/css')
   .sass('resources/sass/style-index.sass', 'public/css')
   .sass('resources/sass/style-individual-page.sass', 'public/css')
   .sass('resources/sass/style-products.sass', 'public/css')
   .sass('resources/sass/style-service.sass', 'public/css');
