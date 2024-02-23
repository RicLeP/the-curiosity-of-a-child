

{!! $content->editorLink() !!}
<div class="@if (!$content->getLayout()) l-episode__centre @endif">
	<tweet tweet-id="{{ $content->id }}" class="tweet"></tweet>
</div>
