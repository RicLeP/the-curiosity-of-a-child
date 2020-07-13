<?php
//dd($content->url);
?>

<div class="u-mv-30 @if (!$content->getLayout()) l-episode__centre l-episode__centre--wide @endif">
	<div class="video-player__scaler">
		<div class="video-player__player">
			<iframe width="1120" height="630" src="{{ $content->url }}?rel=0" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video-player__embed"></iframe>
		</div>
	</div>
</div>



