

{!! $content->editorLink() !!}
<div class="@if (!$content->getLayout()) l-episode__centre @endif">
	<Tweet id="{{ $content->id }}" class="tweet"></Tweet>
</div>
