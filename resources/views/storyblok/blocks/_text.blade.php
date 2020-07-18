

{!! $content->editLink() !!}
<div class="scope-cms u-mb-40 @if (!$content->getLayout() || !$content->parent()->noLayout) l-episode__centre @endif">
	{!! $content->text !!}
</div>

