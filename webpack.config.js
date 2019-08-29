var Encore = require('@symfony/webpack-encore');

// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    // directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // public path used by the web server to access the output path
    .setPublicPath('/build')
    // only needed for CDN's or sub-directory deploy
    //.setManifestKeyPrefix('build/')

    /*
     * ENTRY CONFIG
     *
     * Add 1 entry for each "page" of your app
     * (including one that's included on every page - e.g. "app")
     *
     * Each entry will result in one JavaScript file (e.g. app.js)
     * and one CSS file (e.g. app.css) if your JavaScript imports CSS.
     */
    .addEntry('layout', [
        './assets/js/layout.js',
        './assets/css/layout_style.css'
    ])
    .addEntry('concepteur', './assets/css/concepteur_style.css')
    .addEntry('chercher', './assets/css/chercher_style.css')
    .addEntry('resultatsChercher', './assets/css/resultatsChercher_style.css')
    .addEntry('itineraire', './assets/css/itineraire_style.css')
    .addEntry('contact', './assets/css/contact_style.css')
    .addEntry('aide', './assets/css/aide_style.css')
    .addEntry('apropos', './assets/css/apropos_style.css')
    .addEntry('inscription', './assets/css/inscription_style.css')
    .addEntry('connexion', './assets/css/connexion_style.css')
    .addEntry('profil', './assets/css/profil_style.css')
    .addEntry('modifier_profil', './assets/css/modifier_profil_style.css')
    .addEntry('flash_messages', './assets/css/flash_messages_style.css')
    .addEntry('mousetrap', './assets/js/mousetrap.js')
    .addEntry('footer', './assets/js/footer.js')
    .addEntry('erreur', './assets/css/erreur_style.css')
    .addEntry('form_theme', './assets/css/form_theme_style.css')
    .addEntry('chercher_utilisateur', './assets/css/chercher_utilisateur_style.css')
    .addEntry('cookies_consent', './assets/css/cookies_consent_style.css')
    .addEntry('licences', './assets/css/licences_style.css')
    .addEntry('conditions', './assets/css/conditions_style.css')



    // When enabled, Webpack "splits" your files into smaller pieces for greater optimization.
    .splitEntryChunks()

    // will require an extra script tag for runtime.js
    // but, you probably want this, unless you're building a single-page app
    .enableSingleRuntimeChunk()

    /*
     * FEATURE CONFIG
     *
     * Enable & configure other features below. For a full
     * list of features, see:
     * https://symfony.com/doc/current/frontend.html#adding-more-features
     */
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    // enables hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    // enables @babel/preset-env polyfills
    .configureBabel(() => {}, {
        useBuiltIns: 'usage',
        corejs: 3
    })

    // enables Sass/SCSS support
    //.enableSassLoader()

    // uncomment if you use TypeScript
    //.enableTypeScriptLoader()

    // uncomment to get integrity="..." attributes on your script & link tags
    // requires WebpackEncoreBundle 1.4 or higher
    //.enableIntegrityHashes(Encore.isProduction())

    // uncomment if you're having problems with a jQuery plugin
    //.autoProvidejQuery()

    // uncomment if you use API Platform Admin (composer req api-admin)
    //.enableReactPreset()
    //.addEntry('admin', './assets/js/admin.js')
;

module.exports = Encore.getWebpackConfig();
