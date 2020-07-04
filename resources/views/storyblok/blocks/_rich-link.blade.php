
<?php
//dd($content);
?>

<div class="u-mb-25 rich-link @if (!$content->getLayout()) l-episode__centre @endif">
	<img src="{{ $content->image }}" alt="{{ $content->label }}" class="u-w">

	<div>
		<a href="{{ $content->link }}">
			{{ $content->label }}
		</a>

		<div class="scope-cms u-mt-10 t-5">
			<p>{{ $content->description }}</p>
		</div>
	</div>

</div>