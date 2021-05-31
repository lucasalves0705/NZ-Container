const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

//mix.sass('resources/scss/style.scss', 'public/css');
mix.js('resources/js/app.js', 'public/js');
mix.copyDirectory('resources/js', 'public/js')
mix.copyDirectory('resources/css', 'public/css')
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js');
mix.copy('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/js');
mix.copyDirectory('resources/fonts', 'public/fonts');
mix.copyDirectory('resources/images', 'public/images');
mix.sass('resources/scss/style.scss', 'public/css/styles.css')
