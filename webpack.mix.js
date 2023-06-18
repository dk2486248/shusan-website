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

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

// mix.js(['resources/js/app.js','node_modules/bootstrap/dist/js/bootstrap.js',
//         'node_modules/jquery/dist/jquery.min.js'], 'public/js');

    //     mix.js('resources/js/app.js', 'public/js')
    // .postCss('resources/css/app.css', 'public/css', [
    //     //
    // ]);

    // mix.scripts([
    //     'resources/js/app.js',
    //     'node_modules/bootstrap/dist/js/bootstrap.js',
    //     'node_modules/selectize/dist/js/selectize.js'
    // ],  'public/js/app.js');
    mix.js('resources/js/app.js','public/js/app.js')
        .js('node_modules/bootstrap/dist/js/bootstrap.js','public/js/bootstrap.js')
        .js('node_modules/jquery/dist/jquery.min.js','public/js/jquery-3.5.1.min.js')

      
        .css('node_modules/swiper/swiper-bundle.min.css','public/css/swiper.css')
        .sass('resources/sass/app.scss', 'public/css');

    


