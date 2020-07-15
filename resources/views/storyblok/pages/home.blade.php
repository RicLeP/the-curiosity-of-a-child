<?php
//ddd($episodes);

?>



@extends('layouts._default')

@section('title')
	{{ $story->meta()['name'] }}
@stop

@section('content')
	<main class="bgc-black episode" style="{{ $story->block()->theme() }}">

		<section class="u-w--centred u-w-s u-pv-80 fgc-white">
			<p class="bgc-white fgc-black u-p-20 u-mb-20">Hey! What are you doing here? This website isn’t finished yet! Expect errors...</p>

			<h1 class="t-1 u-mb-30">{!! $story->title !!}</h1>

			<div class="t-4 u-mb-50">
				{!! $story->intro !!}
			</div>

			<div class=" episodes">
				@foreach($episodes as $episode)
					<article class="episodes__episode">
						<h2 class="t-3">{!! $episode->title  !!}</h2>
						<p class="t-5 u-mb-20">{{ $episode->date }}</p>

						<div class="scope-cms u-mb-20">{!! $episode->intro !!}</div>

						<p>
							<a href="{{ $episode->meta()['slug'] }}" class="link-underlined">Explore the episode</a>
						</p>
					</article>
				@endforeach
			</div>
		</section>
	</main>
@endsection

<?php
//ddd($story);
?>