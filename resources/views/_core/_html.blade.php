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
	<meta name="apple-mobile-web-app-title" content="The Curiosity of a Child Podcast">
	<meta name="application-name" content="The Curiosity of a Child Podcast">
	<meta name="msapplication-TileColor" content="{{ config('core.theme_colour') }}">
	<meta name="msapplication-config" content="/img/favicon/browserconfig.xml">
	<meta name="theme-color" content="{{ config('core.theme_colour') }}">

	<link rel="canonical" href="{{ config('app.url') }}/{{ $story->meta()['slug'] !== 'home' ? $story->meta()['slug'] : '' }}">

	<meta name="csrf-token" content="{{ csrf_token() }}">

	@yield('meta')

	@yield('json-ld')

	<link rel="stylesheet" href="https://use.typekit.net/sqb5yuy.css">

{{--	<link rel="stylesheet" href="/build/assets/app.fa9bf94b.css">--}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

	<style type="text/css">
		@media not all and (min-resolution:.001dpcm)
		{ @supports (-webkit-appearance:none) {

			.bg-texture {
				background-size: 1500px 2400px, 100%;
				background-position: center;
			}
		}}
	</style>

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
	<script type="text/javascript" src="//app.storyblok.com/f/storyblok-v2-latest.js"></script>
	<script type="text/javascript">


		const storyblokInstance = new StoryblokBridge({
			accessToken: '{{ config('storyblok.api_preview_key') }}'
		})

		storyblokInstance.on(['published', 'change'], () => {
			location.reload(true)
		})

		storyblokInstance.on(['input'], (event) => {

			const CancelToken = axios.CancelToken;
			let source = CancelToken.source();

			source && source.cancel('Operation canceled due to new request.');

			// save the new request for cancellation
			source = axios.CancelToken.source();

			axios.post('{{ url()->current() }}', {
				data: event
			}, {
				cancelToken: source.token
			}).then((response) => {
				console.log(response);

				document.getElementById('live').innerHTML = response.data;





				const storyblokInstance = new StoryblokBridge({
					accessToken: '{{ config('storyblok.api_preview_key') }}'
				})

				storyblokInstance.pingEditor(() => {



					if (storyblokInstance.isInEditor()) {

						// Load draft version of story

					} else {

						// Load published version of story

					}

				})




				/*storyblok.pingEditor(function() {
					if (storyblok.inEditor) {
						storyblok.enterEditmode
					}
				});*/
			});
		})



		// Call pingEditor to see if the user is in the editor

		storyblokInstance.pingEditor(() => {

			if (storyblokInstance.isInEditor()) {

				// Load draft version of story

			} else {

				// Load published version of story

			}

		})


		/*storyblok.init({
			accessToken: '{{ config('storyblok.api_preview_key') }}'
		});


		storyblok.pingEditor(function() {
			if (storyblok.inEditor) {
				storyblok.enterEditmode
			}
		});

		storyblok.on('input', function(event) {
			//window.location.reload(true);

			axios.post('{{ url()->current() }}', {
				data: event
			}).then((response) => {
				console.log(response);

				document.getElementById('live').innerHTML = response.data;

				storyblok.pingEditor(function() {
					if (storyblok.inEditor) {
						storyblok.enterEditmode
					}
				});
			});
		});

		storyblok.on('published', function() {
			axios.post('{{ route('clear-storyblok-cache') }}').then((response) => {
				console.log(response);
			});
		});*/
	</script>
@endif

</body>
</html>
