

<section class="@if (!$content->getLayout()) l-episode__centre @endif">
	<h4 class="t-3 u-mb-20">
		{{ $content->title }}
	</h4>

	@foreach($content->links as $link)
		@include('storyblok.blocks._' . $link->component(), ['content' => $link])
	@endforeach
</section>
