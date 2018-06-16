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
    .addEntry('chercher', './assets/css/chercher_style.css')
    .addEntry('resultatsChercher', './assets/css/resultatsChercher_style.css')
    .addEntry('contact', './assets/css/contact_style.css')
    .addEntry('aide', './assets/css/aide_style.css')
    .addEntry('apropos', './assets/css/apropos_style.css')
    .addEntry('inscription', './assets/css/inscription_style.css')
    .addEntry('connexion', './assets/css/connexion_style.css')
    .addEntry('profil', './assets/css/profil_style.css')
    .addEntry('modifier_profil', './assets/css/modifier_profil_style.css')
    .addEntry('flash_messages', './assets/css/flash_messages_style.css')
    .addEntry('mousetrap', './assets/js/mousetrap.js')
    .addEntry('header', './assets/js/header.js')
    .addEntry('footer', './assets/js/footer.js')

    // uncomment if you use Sass/SCSS files
    // .enableSassLoader()

    // uncomment for legacy applications that require $/jQuery as a global variable
    // .autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();
