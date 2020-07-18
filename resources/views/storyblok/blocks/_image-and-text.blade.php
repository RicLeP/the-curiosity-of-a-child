<?php
//dd($content->text);
?>

{!! $content->editLink() !!}
<div class="l-episode__span image-and-text">
	@if ($content->image->hasFile())
		<img src="{{ $content->image->filename }}" class="u-w masked-image" alt="{{ $content->image->alt }}">
	@endif

	<div>
		@foreach($content->text as $text)
			@include('storyblok.blocks._' . $text->component(), ['content' => $text])
		@endforeach
	</div>
</div>