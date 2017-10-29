var elixir = require('laravel-elixir');
require('laravel-elixir-vueify');

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

elixir(mix => {
    mix.browserSync({
        proxy: 'local.deisformtool',
        open: false
    });
});

elixir(function (mix) {
    // Se comenta por que no es necesario por el momento compilar estos scripts
    /*
     var bootstrapPath = 'node_modules/bootstrap-sass/assets';
     var paths = {
     'bootstrap': '/../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap/'
     }
     mix.sass('app.scss')
     .copy(bootstrapPath + '/fonts', 'public/fonts')
     .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js');
     mix.scripts([
     paths.bootstrap + 'affix.js',
     paths.bootstrap + 'alert.js',
     paths.bootstrap + 'button.js',
     paths.bootstrap + 'carousel.js',
     paths.bootstrap + 'collapse.js',
     paths.bootstrap + 'dropdown.js',
     paths.bootstrap + 'modal.js',
     paths.bootstrap + 'tooltip.js',
     paths.bootstrap + 'popover.js',
     paths.bootstrap + 'scrollspy.js',
     paths.bootstrap + 'tab.js',
     paths.bootstrap + 'transition.js',
     ]);
     mix.version(['public/css/app.css', 'public/js/all.js']);*/

    //mix.browserify('app/api/controllers/FormularioController.js', 'public/js/app/api/controllers/FormularioController.js');
    mix.browserify('app/api/controllers/InputController.js', 'public/js/app/api/controllers/InputController.js');
});
