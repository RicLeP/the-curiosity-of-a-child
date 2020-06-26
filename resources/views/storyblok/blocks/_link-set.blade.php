

<section>
	<h4 class="t-3 um20">
		{{ $content->title }}
	</h4>

	@foreach($content->links as $link)
		@include('storyblok.blocks._' . $link->component(), ['content' => $link])
	@endforeach
</section>