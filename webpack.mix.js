const mix = require('laravel-mix');

mix.styles('resources/css/*.css', 'resources/sass/_collated.scss')
    .js('resources/js/main.js', 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css/app.css');
