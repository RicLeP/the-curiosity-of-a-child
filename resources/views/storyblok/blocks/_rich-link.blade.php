
<?php
//dd($content);
?>


{!! $content->editLink() !!}
<div class="u-mb-35 rich-link @if (!$content->getLayout()) l-episode__centre @endif">
	<img src="{{ $content->image }}" alt="{{ $content->label }}" class="rich-link__logo">

	<div>
		<a href="{{ $content->link }}" class="link-underlined">
			{{ $content->label }}
		</a>

		<div class="scope-cms u-mt-10 t-5">
			<p>{{ $content->description }}</p>
		</div>
	</div>

</div>