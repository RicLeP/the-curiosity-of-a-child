<link href="{{ mix('css/app.css') }}" rel="stylesheet">

<div style="width: 1200px; height: 750px; background-image: url({{ $story->teaser_image }}); background-size: cover; background-position: center;">
	<div style="width: 1200px; height: 750px; background-color: rgba(0, 0, 0, .3); padding: 40px 60px; position: relative;" class="fgc-white">

		<div style="display: inline-block; padding: 25px; background-color: #000;">
			<img src="{{ asset('img/logo-coac.svg') }}" alt="The Curioisty of a Child" width="180">
		</div>

		<div style="position: absolute; bottom: 80px;">
			<h3 style="background: linear-gradient(48deg, {{ $story->theme[0]->from }} 0%, {{ $story->theme[0]->to }} 100%); padding: 12px 12px 9px 12px; border-radius: 5px; font-size: 24pt; display: inline-block; text-transform: uppercase;" class="t-4 u-mb-15">Episode: {{ $story->number }}</h3>
			<h1 class="t-1">{!! Str::replaceLast(' ', '&nbsp', $story->title) !!}</h1>
			<h2 class="t-3">{!! Str::replaceLast(' ', '&nbsp', $story->subtitle) !!}</h2>
		</div>
	</div>
</div>