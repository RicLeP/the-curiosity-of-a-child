const mix = require('laravel-mix');
let glob = require("glob-all");
let PurgecssPlugin = require("purgecss-webpack-plugin");
require('laravel-mix-bundle-analyzer');

class PurgeCssExtractor {
	static extract(content) {
		return content.match(/[A-Za-z0-9-_:\/]+/g) || [];
	}
}

mix.js('resources/js/app.js', 'public/js').sass('resources/sass/app.scss', 'public/css').options({
	processCssUrls: false,
	autoprefixer: {
		options: {

		}
	},
});

mix.browserSync({
	proxy: 'https://thecuriosityofachild.lndo.site'
});

// Only run PurgeCSS during production builds for faster development builds
// and so you still have the full set of utilities available during development.
if (mix.inProduction()) {
	mix.version();
	mix.bundleAnalyzer();

	mix.webpackConfig({
		plugins: [
			new PurgecssPlugin({

				// Specify the locations of any files you want to scan for class names.
				paths: glob.sync([
					path.join(__dirname, "public/*.php"),
					path.join(__dirname, "resources/views/**/*.blade.php"),
					path.join(__dirname, "resources/js/**/*.vue")
				]),
				extractors: [
					{
						extractor: PurgeCssExtractor,

						// Specify the file extensions to include when scanning for
						// class names.
						extensions: ["html", "js", "php", "vue"]
					}
				],
				whitelistPatternsChildren: []
			})
		]
	});
}
