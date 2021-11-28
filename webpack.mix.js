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

// mix.scripts([
//     // -----------------site----------------------
//     "resources/vendor/js/site_js/bootstrap.min.js",
//     "resources/vendor/js/site_js/easing.js",
//     "resources/vendor/js/site_js/gmap3.min.js",
//     "resources/vendor/js/site_js/jquery.circlechart.js",
//     "resources/vendor/js/site_js/jquery.countdown.js",
//     "resources/vendor/js/site_js/jquery.flexslider-min.js",
//     "resources/vendor/js/site_js/jquery.mCustomScrollbar.js",
//     "resources/vendor/js/site_js/jquery.min.js",
//     "resources/vendor/js/site_js/jquery.zoom.min.js",
//     "resources/vendor/js/site_js/jquery-ui.js",
//     "resources/vendor/js/site_js/main.js",
//     "resources/vendor/js/site_js/owl.carousel.js",
//     "resources/vendor/js/site_js/smoothscroll.js",
//     "resources/vendor/js/site_js/tether.min.js",
//     "resources/vendor/js/site_js/waves.min.js",
//     "resources/vendor/js/site_js/waypoints.min.js",
// ],"public/js/site_app.js");

mix.styles([
    "resources/vendor/css/sb-admin-2.min.css",
],"public/css/app.css")

// mix.styles([
//     "resources/vendor/css/bootstrap.min.css",
//     "resources/vendor/css/responsive.css",
//     "resources/vendor/css/style.css",
// ],"public/css/site_app.css");


// mix.styles("resources/vendor/css/sb-admin-2.min.css","public/css/app.css");
mix.styles("resources/vendor/fontawesome-free/css/all.css","public/font-awesome/font.css");



