<?php
// dd($content);
?>

@if ($content->image->hasFile())
	<div class="u-mv-30 @if (!$content->getLayout()) l-episode__centre l-episode__centre--wide @endif">
		<picture>
			<source srcset="{{ $content->image->desktop_image }}" media="(min-width: 700px)">
			<img src="{{ $content->image->mobile_image }}" class="u-w masked-image" alt="{{ $content->image->alt }}">
		</picture>
	</div>
@endif

