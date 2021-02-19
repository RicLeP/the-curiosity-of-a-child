

{!! $content->editorLink() !!}
<div @if (!$content->getLayout()) class="l-episode__centre--wide u-w--centred" @endif>
	<aside class="polybook-link">
		<img src="{{ $content->image }}" alt="" class="u-w">

		<div class="polybook-link__content">
			<h5 class="u-mb-15">{{ $content->title }}</h5>

			<a href="{{ $content->link }}" class="polybook-link__button" target="_blank">Add to Polybook</a>
		</div>
	</aside>
</div>


