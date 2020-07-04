<?php
//dd($content->images);
?>

<div class="l-episode__centre--wide">
	<swiper>
		@foreach($content->images as $image)
			@include('storyblok.blocks._gallery-image', ['content' => $image])
		@endforeach
	</swiper>
</div>


