<?php
// dd($content->image->mask, $content->mask);
?>

@if ($content->image->hasFile())
	{!! $content->editorLink() !!}
	<div class="u-mv-70 @if (!$content->getLayout()) l-episode__centre l-episode__centre--wide @endif">
		<picture>
			<source srcset="{{ $content->image->desktop_image }}" media="(min-width: 700px)">
			<img src="{{ $content->image->mobile_image }}" class="u-w {{ $content->image->mask }}" alt="{{ $content->image->alt }}">
		</picture>
	</div>
@endif

