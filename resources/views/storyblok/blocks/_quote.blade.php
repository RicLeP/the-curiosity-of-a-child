

<blockquote class="u-mv-20 quote @if (!$content->getLayout()) l-episode__centre--wide @endif">
	<div class="scope-cms t-3 u-mb-20">
		{!! $content->quote_html !!}
	</div>

	<cite>{{ $content->quotee }}</cite>
</blockquote>
