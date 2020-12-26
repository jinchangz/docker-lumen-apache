const mix = require('laravel-mix');

mix.browserSync({
        proxy: {
            target: 'http://localhost',
        },
        files: [
            './resources/**/*',
            './public/**/*',
        ],
        open: true,
        reloadOnRestart: true,
    });
    //.postCss('resources/css/app.css', 'public/css', [
        //
    // ]);