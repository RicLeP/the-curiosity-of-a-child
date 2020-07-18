

{!! $content->editLink() !!}
<div class="u-mb-15 @if (!$content->getLayout()) l-episode__centre @endif">
	<a href="{{ $content->url }}" class="link-underlined">
		{{ $content->label }}
	</a>
</div>
