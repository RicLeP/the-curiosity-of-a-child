
<?php
//dd($content);
?>

<div class="u-mb-25 @if (!$content->getLayout()) l-episode__centre @endif">
	<img src="{{ $content->image }}" alt="{{ $content->label }}" width="250">

	<a href="{{ $content->link }}" class="">
		{{ $content->label }}
	</a>

	<div class="scope-cms u-mt-10">
		<p>{{ $content->description }}</p>
	</div>
</div>