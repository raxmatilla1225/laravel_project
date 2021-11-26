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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);


mix.scripts([
    "resources/vendor/js/bootstrap.bundle.min.js",
    "resources/vendor/js/jquery.easing.min.js",
    "resources/vendor/js/jquery.min.js",
    "resources/vendor/js/sb-admin-2.min.js",
],"public/js/app.js");

mix.styles("resources/vendor/css/sb-admin-2.min.css","public/css/app.css");
mix.styles("resources/vendor/fontawesome-free/css/all.css","public/font-awesome/font.css");
