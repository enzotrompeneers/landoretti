let mix = require('laravel-mix');

mix.sass('resources/assets/sass/app.scss', 'public/css');
mix.combine([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/foundation-sites/dist/js/foundation.min.js'
], 'public/js/app.js');