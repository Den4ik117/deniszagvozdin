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

mix.sass('resources/scss/articles.scss', 'public/css')
    .sass('resources/scss/index-xl.scss', 'public/css')
    .sass('resources/scss/index-lg.scss', 'public/css')
    .sass('resources/scss/index-md.scss', 'public/css')
    .sass('resources/scss/index-sm.scss', 'public/css')
    .sass('resources/scss/index-xs.scss', 'public/css')
    .js('resources/js/index.js', 'public/js')
    .js('resources/js/articles.js', 'public/js')
    .js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]);
