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

mix.styles([
        'resources/front/css/bootstrap.css',
        'resources/front/css/main.css',
    ], 'public/css/styles.css'
);

mix.scripts([
    'resources/front/js/bootstrap5.js',

    ], 'public/js/scripts.js'
);

mix.copyDirectory('resources/front/img','public/img');



// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);
