

{!! $content->editorLink() !!}
<section class="scope-cms u-mb-40 @if (!$content->getLayout()) l-episode__centre @endif">
	<h4 class="t-3 u-mb-20">
		{{ $content->title }}
	</h4>

	{!! $content->text !!}
</section>