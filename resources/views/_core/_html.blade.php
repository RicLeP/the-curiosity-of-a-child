<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title')</title>

	<link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="/img/favicon/site.webmanifest">
	<link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#0e3a4d">
	<link rel="shortcut icon" href="/img/favicon/favicon.ico">
	<meta name="apple-mobile-web-app-title" content="IoD Jersey">
	<meta name="application-name" content="IoD Jersey">
	<meta name="msapplication-TileColor" content="{{ config('core.theme_colour') }}">
	<meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
	<meta name="theme-color" content="{{ config('core.theme_colour') }}">

	@yield('meta')

	<link rel="stylesheet" href="https://use.typekit.net/sqb5yuy.css">

	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
	<script src="{{ mix('js/app.js') }}" defer></script>

	<style type="text/css">
		@media not all and (min-resolution:.001dpcm)
		{ @supports (-webkit-appearance:none) {

			.bg-texture {
				background-size: 1500px 2400px, 100%;
				background-position: center;
			}
		}}
	</style>

	@if (config('app.debug'))
		<meta name="robots" content="noindex">
	@endif

	@if (config('core.google_analytics_enabled'))
		<script async src="https://www.googletagmanager.com/gtag/js?id={{ config('core.google_analytics_code') }}"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', '{{ config('core.google_analytics_code') }}');
		</script>
	@endif
</head>
<body>

@yield('body')

@if (config('storyblok.edit_mode'))
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script type="text/javascript" src="//app.storyblok.com/f/storyblok-latest.js"></script>
	<script type="text/javascript">
		storyblok.init({
			accessToken: '{{ config('storyblok.api_preview_key') }}'
		});

		storyblok.pingEditor(function() {
			if (storyblok.inEditor) {
				storyblok.enterEditmode
			}
		});

		storyblok.on('change', function() {
			window.location.reload(true);
		});

		storyblok.on('published', function() {
			axios.post('{{ route('clear-storyblok-cache') }}').then((response) => {
				console.log(response);
			});
		});
	</script>
@endif

</body>
</html>
