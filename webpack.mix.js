const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

/* mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
 */

mix.copy(['resources/scripts/def/definiciones.js'], 'public/assets/scripts/lib') ;

mix.copy(['resources/scripts/def/paises.js', 
        'resources/scripts/def/departamentos.js',
        'resources/scripts/def/ciudades.js',
        'resources/scripts/def/barrios.js',
        'resources/scripts/def/tiposevaluaciones.js',
        'resources/scripts/def/tipostest.js',

], 'public/assets/scripts/def') ;


mix.copy(['resources/scripts/pacientes/pacientes.js', 'resources/scripts/pacientes/metodos.js'], 'public/assets/scripts/pacientes');
mix.copy('resources/scripts/ejercicios/ejercicios.js', 'public/assets/scripts/ejercicios');


