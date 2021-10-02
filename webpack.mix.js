let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.copy('resources/assets/js/admin-app.js', 'public/js/admin-app.js');

mix.sass('resources/assets/sass/admin.scss', 'public/css');

mix.sass('resources/assets/sass/login.scss', 'public/css');
