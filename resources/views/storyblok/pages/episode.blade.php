<?php
//ddd($story);
/*
$story->listen_links[0]->transform(function ($item, $key) {
	dump($key);
});
*/
//dd($story)
?>



@extends('layouts._default')

@section('title')
	{{ $story->emoji }} {{ $story->meta()['name'] }} - Episode {{ $story->number }} - @parent
@stop

@section('content')
	<main class="bgc-black episode" style="{{ $story->block()->theme() }}">
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

				<aside class="listen-links t-3 t-centred u-mt-50 u-mb-30">
					<h2 class="u-mb-20">Listen to the episode</h2>

					<div class="t-5 listen-links__links">
						@foreach($story->listen_links[0] as $key => $listen_link)
							<a href="{{ $listen_link }}" class="link-underlined" target="_blank">{{ ucwords(str_replace('_', ' ', $key)) }}</a>
						@endforeach
					</div>
				</aside>
			</div>
		</div>

		@foreach($story->features as $feature)
			<section class="fgc-white feature l-episode" style="{{ $feature->theme() }}">
				<header class="l-episode__span feature__hero u-mb-60">
					@foreach($feature->hero as $hero)
						@include('storyblok.blocks._feature-' . $feature->hero[0]->component(), ['content' => $feature->hero[0], 'title' => $feature->title])
					@endforeach
				</header>

				@foreach($feature->body as $section)
					@include('storyblok.blocks._' . $section->component(), ['content' => $section])
				@endforeach
			</section>
		@endforeach
	</main>
@endsection

<?php
//ddd($story);
?>