<?php
//ddd($story);
?>

@extends('layouts._default')

@section('title')
	{{ $story->title }} - @parent
@stop

@section('content')
	<main class="bgc-black episode">
		<header class="u-v hero">
			<video-hero></video-hero>

			<div class="hero__content fgc-white">
				<p class="t-uppercase t-4 hero__date">{{ $story->formatted_date }}</p>
				<h1 class="hero__title">{{ $story->title }}</h1>
				<h2 class="hero__subtitle">{{ $story->subtitle }}</h2>
			</div>
		</header>

		<div class="episode-number fgc-black">
			<span>
				{{ $story->number }}
			</span>
		</div>

		<div class="l-episode">
			<div class="t-4 fgc-white l-episode__centre episode__intro">
				{!! $story->intro !!}
			</div>
		</div>

		@foreach($story->features as $feature)
			<section class="u-mb-100 fgc-white feature l-episode">
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