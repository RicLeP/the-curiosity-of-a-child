<?php
// dd($content);
?>

@if ($content->image->hasFile())
	<div class="u-mv-30 @if (!$content->getLayout()) l-episode__centre l-episode__centre--wide @endif">
		<img src="{{ $content->image->filename }}" class="u-w" alt="{{ $content->image->alt }}">
	</div>
@endif

