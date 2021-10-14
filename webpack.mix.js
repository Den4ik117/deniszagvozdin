const mix = require('laravel-mix');

mix.sass('resources/scss/articles.scss', 'public/css')
    // .sass('resources/scss/auth.scss', 'public/css')
    .sass('resources/scss/index-xl.scss', 'public/css')
    .sass('resources/scss/index-lg.scss', 'public/css')
    .sass('resources/scss/index-md.scss', 'public/css')
    .sass('resources/scss/index-sm.scss', 'public/css')
    .sass('resources/scss/index-xs.scss', 'public/css');

mix.sass('resources/scss/bootstrap.scss', 'public/css')
    .sass('resources/scss/app.scss', 'public/css')
    .sass('resources/scss/pages/auth.scss', 'public/css')

// mix.sass('resources/scss/app.scss', 'public/css')
//     .sass('resources/scss/bootstrap.scss', 'public/css')
//     .sass('resources/scss/pages/auth.scss', 'public/css/pages')
//     .sass('resources/scss/pages/error.scss', 'public/css/pages')
//     .sass('resources/scss/pages/email.scss', 'public/css/pages')
//     .sass('resources/scss/pages/chat.scss', 'public/css/pages')
//     .sass('resources/scss/widgets/chat.scss', 'public/css/widgets')
//     .sass('resources/scss/widgets/todo.scss', 'public/css/widgets')
//     .options({
//         processCssUrls: false
//     });

// mix.postCss('resources/css/dashboard.css', 'public/css', [
//     require('postcss-import'),
//     require('tailwindcss'),
//     require('autoprefixer')
// ]);

mix.js('resources/js/index.js', 'public/js')
    .js('resources/js/articles.js', 'public/js')
    .js('resources/js/article.js', 'public/js')
    .js('resources/js/mazer.js', 'public/js');
    // .minify('dist/assets/js/mazer.js');

