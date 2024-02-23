<?php
//ddd($story);
/*
$story->listen_links[0]->transform(function ($item, $key) {
	dump($key);
});
*/
//dd($story);
?>



@extends('layouts._default')

@section('title')
	{{ $story->emoji }} {{ $story->meta()['name'] }} - Episode {{ $story->number }} - @parent
@stop

@section('json-ld')
	@if ($story->mp3_url)
	<script type="application/ld+json">
		{
			"@context": "https://schema.org/",
			"@type": "PodcastEpisode",
			"url": "https://thecuriosityofachild.com/{{ $story->meta()['slug'] }}",
			"name": "{{ $story->meta()['name'] }}",
			"datePublished": "{{ $story->published_date_string }}",
			"timeRequired": "PT{{ $story->duration }}M",
			"description": "{{ strip_tags($story->intro) }}",
			"associatedMedia": {
				"@type": "MediaObject",
				"contentUrl": "{{ $story->mp3_url }}"
			},
			"partOfSeries": {
				"@type": "PodcastSeries",
				"name": "The Curiosity of a Child",
				"url": "https://thecuriosityofachild.com"
			}
		 }
		}
		</script>
	@endif
@endsection

@section('meta')
	<meta property="description" content="{{ strip_tags($story->intro) }}">

	<meta property="og:title" content="{{ $story->emoji }} {{ $story->meta()['name'] }} - Episode {{ $story->number }} - The Curiosity of a Child Podcast">
	<meta property="og:site_name" content="The Curiosity of a Child Podcast">
	<meta property="og:url" content="https://thecuriosityofachild.com/{{ $story->meta()['slug'] }}">
	<meta property="og:description" content="{{ strip_tags($story->intro) }}">
	<meta property="og:type" content="article">
	<meta property="og:article:published_time" content="{{ $story->date->content()->toIso8601String() }}">
	<meta property="og:article:modified_time" content="{{ $story->meta()['updated_at']->toIso8601String() }}">
    @if (config('app.env') !== 'dev')
        <meta name="twitter:image" content="{{ $manner->source(route('manner', $story->meta()['slug']))->thanks() }}">
    @endif
    <meta property="og:locale" content="en_GB">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@curichildpod">
	<meta name="twitter:creator" content="@curichildpod">
	<meta name="twitter:title" content="{{ $story->emoji }} {{ $story->meta()['name'] }} - Episode {{ $story->number }} - The Curiosity of a Child Podcast">
	<meta name="twitter:text:title" content="{{ $story->emoji }} {{ $story->meta()['name'] }} - Episode {{ $story->number }} - The Curiosity of a Child Podcast">
	<meta name="twitter:description" content="{{ strip_tags($story->intro) }}">
    @if (config('app.env') !== 'dev')
	    <meta name="twitter:image" content="{{ $manner->source(route('manner', $story->meta()['slug']))->thanks() }}">
    @endif
	<meta name="twitter:image:alt" content="{{ strip_tags($story->title) }} {{ strip_tags($story->subtitle) }}">
@stop

@section('content')
	{!! $story->block()->editorLink() !!}
	<main class="bgc-black episode bg-texture" style="{{ $story->block()->theme() }}">
		<div class="bg-texture" style="{{ $story->block()->theme() }}">
			<header class="u-v hero">
				@include('storyblok.blocks._' . $story->hero[0]->component(), ['content' => $story->hero[0]])

				<div class="hero__content fgc-white">
					<div class="episode-number fgc-black">
						<div class="episode-number__number">
						<span>
							{{ $story->number }}
						</span>
						</div>

						<div class="episode-number__date">
							<svg viewBox="0 0 120 120">
								<path id="curve" fill="none" d="m 120,100 a 50,50 0 0 1 -100,0 50,50 0 0 1 100,0 z"/>
								<text>
									<textPath xlink:href="#curve" startOffset="150" fill="#fff">
										{{ $story->formatted_date }}
									</textPath>
								</text>
							</svg>
						</div>
					</div>

					<h1 class="hero__title">{!! $story->title !!}</h1>
					<h2 class="hero__subtitle">{!! $story->subtitle !!}</h2>
				</div>
			</header>

			<div class="l-episode">
				<div class="t-4 fgc-white l-episode__centre episode__intro">
					{!! $story->intro !!}

					@if ($story->listen_links)
						<aside class="listen-links t-centred u-mt-70 u-mb-30">
							<h2 class="u-mb-20 t-3">Listen to the episode</h2>

							{!! $story->listen_links[0]->editorLink() !!}
							<div class="t-5 listen-links__links u-mb-25">
								@foreach($story->listen_links[0] as $key => $listen_link)
									<a href="{{ $listen_link }}" class="listen-links__link" target="_blank">
										<img src="{{ asset('img/icon-' . str_replace('_', '-', $key) . '.svg') }}" alt="" width="50" class="listen-links__icon">

										{{ ucwords(str_replace('_', ' ', $key)) }}
									</a>
								@endforeach
							</div>

							<p class="t-5">Please leave a review on one of the networks above as it’s how we grow and why not say hi on <a href="https://twitter.com/curichildpod" class="link-underlined">Twitter</a>, <a href="https://www.instagram.com/curichildpod/" class="link-underlined">Instagram</a>, <a href="https://www.facebook.com/curichildpod/" class="link-underlined">Facebook</a> or <a href="mailto:hello@thecuriosityofachild.com" class="link-underlined">email</a>? We’d love to heard from you.</p>
						</aside>
					@endif
				</div>
			</div>
		</div>

		@foreach($story->features as $feature)
			{!! $feature->editorLink() !!}
			<section class="fgc-white feature bg-texture l-episode" style="{{ $feature->theme() }}">
				<header class="l-episode__span feature__hero u-mb-10">
					@include('storyblok.blocks._feature-' . $feature->hero[0]->component(), ['content' => $feature->hero[0], 'title' => $feature->title])
				</header>

				@foreach($feature->body as $section)
					@include('storyblok.blocks._' . $section->component(), ['content' => $section])
				@endforeach
			</section>
		@endforeach

		@if (!count($story->features))
			<section class="fgc-white feature bg-texture l-episode">
				<h2 class="t-3 l-episode__span t-centred">Full show notes coming soon.</h2>
			</section>
		@endif

		@if (count($story->features))
			<aside class="listen-links t-centred u-mt-minus-150 t-4 fgc-white u-w--centred u-w-s">
				<h2 class="u-mb-20 t-3">Listen to the episode</h2>

				{!! $story->listen_links[0]->editorLink() !!}
				<div class="t-5 listen-links__links u-mb-25">
					@foreach($story->listen_links[0] as $key => $listen_link)
						<a href="{{ $listen_link }}" class="listen-links__link" target="_blank">
							<img src="{{ asset('img/icon-' . str_replace('_', '-', $key) . '.svg') }}" alt="" width="50" class="listen-links__icon">

							{{ ucwords(str_replace('_', ' ', $key)) }}
						</a>
					@endforeach
				</div>

				<p class="t-5">Please leave a review on one of the networks above as it’s how we grow and why not say hi on <a href="https://twitter.com/curichildpod" class="link-underlined">Twitter</a>, <a href="https://www.instagram.com/curichildpod/" class="link-underlined">Instagram</a>, <a href="https://www.facebook.com/curichildpod/" class="link-underlined">Facebook</a> or <a href="mailto:hello@thecuriosityofachild.com" class="link-underlined">email</a>? We’d love to heard from you.</p>
			</aside>
		@endif

		@if ($story->transcript)
			<article class="u-w--centred u-w-s fgc-white transcript">
				<h3 class="t-3 u-mb-5">Transcript</h3>

				<p>This transcript is automatically generated so may contain errors. <button @click="showTranscript = true" class="transcript__button">Show</button></p>

				<div class="transcript__content scope-transcript" v-if="showTranscript">
					{!! $story->transcript !!}
				</div>
			</article>
		@endif
	</main>
@endsection

<?php
//ddd($story);
?>
