<?php
//dd($content);
?>


{!! $content->editorLink() !!}
<blockquote class="u-mv-20 quote @if (!$content->getLayout()) l-episode__centre @endif">
	<div class="scope-cms t-3 u-mb-20 quote__quote">
		{!! $content->quote !!}
	</div>

	<cite class="t-5 t-uppercase">{{ $content->quotee }}</cite>
</blockquote>
