<?php

//ddd($story);

?>



@extends('layouts._default')

@section('title')
	{{ $story->meta()['name'] }}
@stop

@section('content')
	<main class="bgc-black bg-texture home" style="{{ $story->block()->theme() }}">
		<section class="u-pt-80 u-pb-40 fgc-white">
			<div class="u-w--centred u-w-s">
				<h1 class="t-1 u-mb-30">{!! $story->title !!}</h1>

				<div class="t-4 scope-cms">
					{!! $story->intro !!}
				</div>

				<aside class="listen-links t-centred u-mt-50 u-mb-70">
					<h2 class="u-mb-20 t-3">Listen to the podcast</h2>

					<div class="t-5 listen-links__links u-mb-25">
						<a href="https://curiosityofachild.podbean.com/" class="listen-links__link" target="_blank">
							<img src="/img/icon-podbean.svg" alt="" width="50" class="listen-links__icon">

							Podbean
						</a>
						<a href="https://open.spotify.com/show/7boEVf6mV3MXxJeIYiTFEz" class="listen-links__link" target="_blank">
							<img src="/img/icon-spotify.svg" alt="" width="50" class="listen-links__icon">

							Spotify
						</a>
						<a href="https://www.podchaser.com/podcasts/the-curiosity-of-a-child-981218" class="listen-links__link" target="_blank">
							<img src="/img/icon-podchaser.svg" alt="" width="50" class="listen-links__icon">

							Podchaser
						</a>
						<a href="https://podcasts.apple.com/gb/podcast/the-curiosity-of-a-child/id1486026104" class="listen-links__link" target="_blank">
							<img src="/img/icon-apple-podcasts.svg" alt="" width="50" class="listen-links__icon">

							Apple Podcasts
						</a>
						<a href="https://podcasts.google.com/feed/aHR0cHM6Ly9mZWVkLnBvZGJlYW4uY29tL2N1cmlvc2l0eW9mYWNoaWxkL2ZlZWQueG1s?sa=X&ved=2ahUKEwix2ffHpfzrAhUG4hoKHffYCGUQ4aUDegQIARAC" class="listen-links__link" target="_blank">
							<img src="/img/icon-google-podcasts.svg" alt="" width="50" class="listen-links__icon">

							Google Podcasts
						</a>
					</div>

					<p class="t-5 u-mb-30">Please leave a review on one of the networks above as it’s how we grow and why not say hi on <a href="https://twitter.com/curichildpod" class="link-underlined">Twitter</a>, <a href="https://www.instagram.com/curichildpod/" class="link-underlined">Instagram</a>, <a href="https://www.facebook.com/curichildpod/" class="link-underlined">Facebook</a> or <a href="mailto:hello@thecuriosityofachild.com" class="link-underlined">email</a>? We’d love to heard from you.</p>

					<iframe title="The Curisoity of a Child Trailer" allowtransparency="true" style="border: none; min-width: min(100%, 430px);" data-name="pb-iframe-player" src="https://www.podbean.com/player-v2/?i=gt3ib-10024b1-pb&from=pb6admin&share=1&download=0&rtl=0&fonts=Arial&skin=f6f6f6&font-color=auto&btn-skin=3ab278" width="100%" height="150"></iframe>
				</aside>
			</div>

{{--			<div class="u-w--centred u-w-flush u-w-xl is-2022">--}}
{{--				<a href="https://www.intelligentspeechconference.com/" target="_blank">--}}
{{--					<picture>--}}
{{--						<source srcset="{{ asset('img/intelligent-speech-banner.svg') }}" media="(min-width: 800px)">--}}
{{--						<img src="{{ asset('img/intelligent-speech-banner--mobile.svg') }}" alt="Intelligent Speech Conference 2022" class="u-w u-mb-60">--}}
{{--					</picture>--}}
{{--				</a>--}}
{{--				<a href="https://www.intelligentspeechconference.com/" target="_blank"><img src="{{ asset('img/intelligent-speech-promo.svg') }}" alt="10% off with promo code: curiosity" class="is-2022__promo"></a>--}}
{{--			</div>--}}


			<div class="episodes">
			@foreach($episodes->stories as $key => $episode)
					@if ($key === 4)
						<div class="episodes__episode">
							<a href="https://shop.thecuriosityofachild.com/">

								<swiper class="swiper episodes__episode-image" :options="autoSwiper">
									<swiper-slide>
										<img src="https://shop.thecuriosityofachild.com/wp-content/uploads/2021/11/baby-short-sleeve-one-piece-black-front-61800b702ccab.jpg" alt="" class="u-w">
									</swiper-slide>

									<swiper-slide>
										<img src="https://shop.thecuriosityofachild.com/wp-content/uploads/2021/06/youth-premium-tee-black-front-60d738a37974e.jpg" alt="" class="u-w">
									</swiper-slide>

									<swiper-slide>
										<img src="https://shop.thecuriosityofachild.com/wp-content/uploads/2021/06/all-over-print-premium-pillow-22x22-front-lifestyle-3-60d637bc3b7d6.jpg" alt="" class="u-w">
									</swiper-slide>

									<swiper-slide>
										<img src="https://shop.thecuriosityofachild.com/wp-content/uploads/2021/11/all-over-print-neck-gaiter-white-front-617ff492cd62f.jpg" alt="" class="u-w">
									</swiper-slide>

									<swiper-slide>
										<img src="https://shop.thecuriosityofachild.com/wp-content/uploads/2021/06/unisex-tri-blend-t-shirt-teal-triblend-front-60c49c6c3be1e.jpg" alt="" class="u-w">
									</swiper-slide>

									<swiper-slide>
										<img src="https://shop.thecuriosityofachild.com/wp-content/uploads/2021/06/white-ceramic-mug-with-color-inside-black-11oz-front-60d62e0d3f84f.jpg" alt="" class="u-w">
									</swiper-slide>

									<swiper-slide>
										<img src="https://shop.thecuriosityofachild.com/wp-content/uploads/2021/11/black-foot-sublimated-socks-flat-617ff5aa42e16.jpg" alt="" class="u-w">
									</swiper-slide>
								</swiper>
							</a>

							<div class="episodes__episode-body">
								<h2 class="t-3"><a href="https://shop.thecuriosityofachild.com/" class="link">Visit the store!</a></h2>
								<h3 class="t-4 u-mb-10">Show your curiosity!</h3>

								<div class="scope-cms u-mb-20">
									<p>From t-shirts to mugs, gaming to curiosity show your support and help the podcast by visiting our store.</p>
								</div>

								<p>
									<a href="https://shop.thecuriosityofachild.com/" class="link-underlined">Explore the store</a>
								</p>
							</div>
						</div>
					@endif

					<article class="episodes__episode">
						<a href="{{ $episode->meta()['slug'] }}"><img src="{{ $episode->teaser_image->transform()->resize(800, 450) }}" alt="" class="u-w episodes__episode-image"></a>

						<div class="episodes__episode-body">
							<h2 class="t-3"><a href="{{ $episode->meta()['slug'] }}" class="link">{{ $episode->number }}: {!! $episode->title !!}</a></h2>
							<h3 class="t-4 u-mb-10">{!! $episode->subtitle !!}</h3>

							<p class="t-5 u-mb-20"><time>{{ $episode->formatted_date }}</time></p>

							<div class="scope-cms u-mb-20">{!! $episode->intro !!}</div>

							<p>
								<a href="{{ $episode->meta()['slug'] }}" class="link-underlined">Explore the episode</a>
							</p>
						</div>

					</article>
				@endforeach
			</div>
		</section>

		<div class="u-w--centred u-w-s fgc-white u-pb-70">
			<aside class="listen-links t-centred">
				<h2 class="u-mb-20 t-3">Listen to the podcast</h2>

				<div class="t-5 listen-links__links u-mb-25">
					<a href="https://curiosityofachild.podbean.com/" class="listen-links__link" target="_blank">
						<img src="/img/icon-podbean.svg" alt="" width="50" class="listen-links__icon">

						Podbean
					</a>
					<a href="https://open.spotify.com/show/7boEVf6mV3MXxJeIYiTFEz" class="listen-links__link" target="_blank">
						<img src="/img/icon-spotify.svg" alt="" width="50" class="listen-links__icon">

						Spotify
					</a>
					<a href="https://www.podchaser.com/podcasts/the-curiosity-of-a-child-981218" class="listen-links__link" target="_blank">
						<img src="/img/icon-podchaser.svg" alt="" width="50" class="listen-links__icon">

						Podchaser
					</a>
					<a href="https://podcasts.apple.com/gb/podcast/the-curiosity-of-a-child/id1486026104" class="listen-links__link" target="_blank">
						<img src="/img/icon-apple-podcasts.svg" alt="" width="50" class="listen-links__icon">

						Apple Podcasts
					</a>
					<a href="https://podcasts.google.com/feed/aHR0cHM6Ly9mZWVkLnBvZGJlYW4uY29tL2N1cmlvc2l0eW9mYWNoaWxkL2ZlZWQueG1s?sa=X&ved=2ahUKEwix2ffHpfzrAhUG4hoKHffYCGUQ4aUDegQIARAC" class="listen-links__link" target="_blank">
						<img src="/img/icon-google-podcasts.svg" alt="" width="50" class="listen-links__icon">

						Google Podcasts
					</a>
				</div>

				<p class="t-5">Please leave a review on one of the networks above as it’s how we grow and why not say hi on <a href="https://twitter.com/curichildpod" class="link-underlined">Twitter</a>, <a href="https://www.instagram.com/curichildpod/" class="link-underlined">Instagram</a>, <a href="https://www.facebook.com/curichildpod/" class="link-underlined">Facebook</a> or <a href="mailto:hello@thecuriosityofachild.com" class="link-underlined">email</a>? We’d love to heard from you.</p>
			</aside>
		</div>
	</main>
@endsection

<?php
//ddd($story);
?>