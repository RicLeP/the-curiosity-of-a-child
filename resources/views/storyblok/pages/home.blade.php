<?php
//ddd($episodes);

?>



@extends('layouts._default')

@section('title')
	{{ $story->meta()['name'] }}
@stop

@section('content')
	<main class="bgc-black bg-texture home" style="{{ $story->block()->theme() }}">

		<section class="u-w--centred u-w-s u-pv-80 fgc-white">
			<h1 class="t-1 u-mb-30">{!! $story->title !!}</h1>

			<div class="t-4 u-mb-50">
				{!! $story->intro !!}
			</div>

			<div class="episodes">
				@foreach($episodes as $episode)
					<article class="episodes__episode">
						<a href="{{ $episode->meta()['slug'] }}"><img src="{{ $episode->teaser_image }}" alt="" class="u-w episodes__episode-image"></a>

						<div class="episodes__episode-body">
							<h2 class="t-2"><a href="{{ $episode->meta()['slug'] }}" class="link">{{ $episode->number }}: {!! $episode->title !!}</a></h2>
							<h3 class="t-4 u-mb-10">{!! $episode->subtitle !!}</h3>

							<p class="t-5 u-mb-20">{{ $episode->date }}</p>

							<div class="scope-cms u-mb-20">{!! $episode->intro !!}</div>

							<p>
								<a href="{{ $episode->meta()['slug'] }}" class="link-underlined">Explore the episode</a>
							</p>
						</div>

					</article>
				@endforeach
			</div>
		</section>
	</main>
@endsection

<?php
//ddd($story);
?>