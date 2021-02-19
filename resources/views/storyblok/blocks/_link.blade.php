
{!! $content->editorLink() !!}
<div class="u-mb-15 @if (!$content->getLayout()) l-episode__centre @endif">
	<a href="{{ $content->link->cached_url }}" class="link-underlined" target="_blank">
		{{ $content->label }}
	</a>
</div>
