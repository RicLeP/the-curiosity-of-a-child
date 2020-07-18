<?php
// dd($content);
?>

<swiper-slide>
	<figure class="gallery-image">
		<picture>
			<source srcset="{{ $content->desktop_image }}" media="(min-width: 700px)">
			<img src="{{ $content->mobile_image }}" class="u-w masked-image" alt="{{ $content->alt }}">
		</picture>

		<figcaption class="gallery-image__caption t-6 t-uppercase">
			<p>
				{{ $content->title }}
			</p>
		</figcaption>
	</figure>
</swiper-slide>
