const mix = require('laravel-mix');

mix.sass('resources/scss/articles.scss', 'public/css')
    .sass('resources/scss/auth.scss', 'public/css')
    .sass('resources/scss/index-xl.scss', 'public/css')
    .sass('resources/scss/index-lg.scss', 'public/css')
    .sass('resources/scss/index-md.scss', 'public/css')
    .sass('resources/scss/index-sm.scss', 'public/css')
    .sass('resources/scss/index-xs.scss', 'public/css');

mix.postCss('resources/css/dashboard.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer')
]);

mix.js('resources/js/index.js', 'public/js')
    .js('resources/js/articles.js', 'public/js');
