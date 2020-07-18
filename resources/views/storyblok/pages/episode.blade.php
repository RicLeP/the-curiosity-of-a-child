<?php
//ddd($story);
/*
$story->listen_links[0]->transform(function ($item, $key) {
	dump($key);
});
*/
//dd()
?>



@extends('layouts._default')

@section('title')
	{{ $story->emoji }} {{ $story->meta()['name'] }} - Episode {{ $story->number }} - @parent
@stop

@section('content')
	{!! $story->block()->editLink() !!}
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
										{{ $story->date }}
									</textPath>
								</text>
							</svg>
						</div>
					</div>

					<p class="t-uppercase t-4 hero__date">{{ $story->formatted_date }}</p>
					<h1 class="hero__title">{!! $story->title  !!}</h1>
					<h2 class="hero__subtitle">{!! $story->subtitle !!}</h2>
				</div>
			</header>

			<div class="l-episode">
				<div class="t-4 fgc-white l-episode__centre episode__intro">
					{!! $story->intro !!}

					<aside class="listen-links t-centred u-mt-100 u-mb-30">
						<h2 class="u-mb-20 t-3">Listen to the episode</h2>

						{!! $story->listen_links[0]->editLink() !!}
						<div class="t-5 listen-links__links u-mb-25">
							@foreach($story->listen_links[0] as $key => $listen_link)
								<a href="{{ $listen_link }}" class="listen-links__link" target="_blank">
									<img src="{{ asset('img/icon-' . str_replace('_', '-', $key) . '.svg') }}" alt="" width="50" class="listen-links__icon">

									{{ ucwords(str_replace('_', ' ', $key)) }}
								</a>
							@endforeach
						</div>

						<p class="t-5">Please leave a review on one of the networks above and why not <a href="https://twitter.com/curichildpod" class="link-underlined">say hi on Twitter?</a>?</p>
					</aside>
				</div>
			</div>
		</div>

		@foreach($story->features as $feature)
			{!! $feature->editLink() !!}
			<section class="fgc-white feature bg-texture l-episode" style="{{ $feature->theme() }}">
				<header class="l-episode__span feature__hero u-mb-60">
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
			<aside class="listen-links t-centred u-mt-minus-150 t-4 fgc-white">
				<h2 class="u-mb-20 t-3">Listen to the episode</h2>

				{!! $story->listen_links[0]->editLink() !!}
				<div class="t-5 listen-links__links u-mb-25">
					@foreach($story->listen_links[0] as $key => $listen_link)
						<a href="{{ $listen_link }}" class="listen-links__link" target="_blank">
							<img src="{{ asset('img/icon-' . str_replace('_', '-', $key) . '.svg') }}" alt="" width="50" class="listen-links__icon">

							{{ ucwords(str_replace('_', ' ', $key)) }}
						</a>
					@endforeach
				</div>

				<p class="t-5">Please leave a review on one of the networks above and why not <a href="https://twitter.com/curichildpod" class="link-underlined">say hi on Twitter?</a></p>
			</aside>
		@endif
	</main>
@endsection

<?php
//ddd($story);
?>