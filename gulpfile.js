process.env.DISABLE_NOTIFIER = true

var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
    mix.styles([
        './node_modules/font-awesome/css/font-awesome.css',
        "./public/css/app.css"
    ], 'public/css/main.css');
});

elixir(function(mix) {
    mix.scripts([
        './node_modules/jquery/dist/jquery.js',
        './node_modules/bootstrap-sass/assets/javascripts/bootstrap.js'
    ], 'public/js/vendor.js');
});
