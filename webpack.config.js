var Encore = require('@symfony/webpack-encore');

Encore
    // the project directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    // uncomment to create hashed filenames (e.g. app.abc123.css)
    // .enableVersioning(Encore.isProduction())

    // uncomment to define the assets of the project
    .addEntry('layout', [
        './assets/js/layout.js',
        './assets/css/layout_style.css'
    ])
    .addEntry('concepteur', [
        './assets/js/main.js',
        './assets/css/concepteur_style.css'
    ])
    .addEntry('mousetrap', './assets/js/mousetrap.js')
    .addEntry('header', './assets/js/header.js')

    // uncomment if you use Sass/SCSS files
    // .enableSassLoader()

    // uncomment for legacy applications that require $/jQuery as a global variable
    // .autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();
