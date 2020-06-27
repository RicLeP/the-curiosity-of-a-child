<?php
//ddd($story);
?>

@extends('layouts._default')

@section('content')
	<main class="bgc-black">
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
			<div class="t-3 fgc-white u-mb-30 l-episode__centre u-mb-80">
				{!! $story->intro_html !!}
			</div>
		</div>

		@foreach($story->features as $feature)
			<section class="u-mb-100 fgc-white feature l-episode">
				<h3 class="t-2 u-mb-30 l-episode__centre">
					{{ $feature->title }}
				</h3>

				@foreach($feature->body as $section)
					@include('storyblok.blocks._' . $section->component(), ['content' => $section])
				@endforeach
			</section>
		@endforeach
		</div>
	</main>
@endsection