const mix = require('laravel-mix');

/* Compiles all SCSS files, adds vendor prefixes and outputs to the root of the theme.
Autoprefix options are set in package.json under 'browserlist'.
When using 'npm run prod' the output will be minified. */
mix.less('resources/less/style.less', '/').options({
	processCssUrls: false,
	postCss: [
	   require('autoprefixer')({
			grid: true
		})
	]
});

/* Compile the admin CSS to a separate CSS file. */
mix.less('resources/less/project/admin.less', '/').options({
    processCssUrls: false,
    postCss: [
       require('autoprefixer')({
            grid: true
        })
    ]
});

/* Compile the print CSS to a separate CSS file. */
mix.less('resources/less/print.less', '/').options({
    processCssUrls: false,
    postCss: [
       require('autoprefixer')({
            grid: true
        })
    ]
});

/* Minify the compiled CSS files. */
mix.minify(['style.css', 'admin.css', 'print.css']);

/* Combine the project JS files. */
mix.combine(['resources/js/vendor/swiper.min.js',
    'resources/js/vendor/scrollnav.min.js',
    'resources/js/src/blocks.js',
    'resources/js/src/carousel.js',
    'resources/js/src/common.js',
    'resources/js/src/course-list.js',
    'resources/js/src/form.js',
    'resources/js/src/header.js',
    'resources/js/src/item.js',
    'resources/js/src/modal.js',
    'resources/js/src/product.js',
    'resources/js/src/schedule.js',
    'resources/js/src/sticky-nav.js',
    'resources/js/src/user-area.js',
    'resources/js/src/home.js',
    'resources/js/src/admin.js'],
    'js/main.js');
