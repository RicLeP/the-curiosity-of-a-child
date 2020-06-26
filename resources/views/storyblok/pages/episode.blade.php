<?php
//ddd($story);
?>

@extends('layouts._default')

@section('content')
	<main class="bgc-black l-episode">
		<header class="u-v hero">
			<cld-video cloud-name="sirric" public-id="https://res.cloudinary.com/sirric/video/upload/v1593170731/coac/ep16/ep16_hero_sc6pih.mp4" autoplay="true" muted="true" loop="true" width="100%">
			</cld-video>

			<div class="hero__overlay">
				<cld-video cloud-name="sirric" public-id="https://res.cloudinary.com/sirric/video/upload/v1593206959/coac/common/ink_txqlf2.mp4" autoplay="true" muted="true" width="100%">
				</cld-video>
			</div>

			<div class="hero__content fgc-white">
				<h1 class="u-mb-10 hero__title">{{ $story->title }}</h1>
				<h2 class="hero__subtitle">{{ $story->subtitle }}</h2>
			</div>
		</header>

		<div class="t-3 fgc-white u-mb-30 l-episode__centre">
			{!! $story->intro_html !!}
		</div>

		@foreach($story->features as $feature)
			<section class="u-mb-100 fgc-white l-episode__centre feature">
				<h3 class="t-2 u-mb-30">
					{{ $feature->title }}
				</h3>

				@foreach($feature->body as $section)
					@include('storyblok.blocks._' . $section->component(), ['content' => $section])
				@endforeach
			</section>
		@endforeach
	</main>
@endsection
