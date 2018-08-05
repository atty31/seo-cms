var path = require('./gulp/gulp.conf');

const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    //app.scss includes app css, Boostrap and Ionicons
    mix.sass('app.scss', path.backend.css)
        .less('./node_modules/admin-lte/build/less/AdminLTE.less', path.backend.css + '/adminlte-less.css')
        .less('adminlte-app.less', path.backend.css)
        .less('./node_modules/toastr/toastr.less', path.backend.css)
        .styles([
            './public/css/app.css',
            './node_modules/admin-lte/dist/css/skins/_all-skins.css',
            './public/css/adminlte-less.css',
            './public/css/adminlte-app.css',
            './node_modules/icheck/skins/square/blue.css',
            './public/css/toastr.css'
        ], path.backend.css)
        .copy('node_modules/font-awesome/fonts/*.*', path.backend.fonts)
        .copy('node_modules/ionicons/dist/fonts/*.*', path.backend.fonts)
        .copy('node_modules/admin-lte/bootstrap/fonts/*.*', path.backend.fonts)
        .copy('node_modules/admin-lte/dist/css/skins/*.*', path.backend.css + '/skins')
        .copy('node_modules/admin-lte/dist/img', path.backend.img)
        .copy('node_modules/admin-lte/plugins', path.backend.plugins)
        .copy('node_modules/icheck/skins/square/blue.png', path.backend.css)
        .copy('node_modules/icheck/skins/square/blue@2x.png', path.backend.img)
        .webpack('app.js', path.backend.js);
});

elixir(function (mix) {
    mix.sass('./resources/assets/frontend/scss/main.scss', path.frontend.css)
        .copy(path.assets.frontend + 'vendor/*', path.frontend.vendor)
        .copy(path.assets.frontend + 'css/**', path.frontend.css)
        .copy(path.assets.frontend + 'js/*.*', path.frontend.js)
        .copy(path.assets.frontend + 'img/**', path.frontend.img)
        .copy(path.assets.frontend + 'fonts/**', path.frontend.fonts);
});