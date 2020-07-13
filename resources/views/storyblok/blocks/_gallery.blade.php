<?php
//dd($content->images);
?>

<div class="l-episode__centre--wide">
	<div class="gallery">
		<swiper class="swiper" :options="gallerySwiper">
			@foreach($content->images->content as $image)
				@include('storyblok.blocks._gallery-image', ['content' => $image])
			@endforeach

			<div class="swiper-button-prev" slot="button-prev"></div>
			<div class="swiper-button-next" slot="button-next"></div>
			<div class="swiper-pagination" slot="pagination"></div>
		</swiper>
	</div>

</div>


