<section>
	@foreach($content->links as $link)
		@include('storyblok.blocks._' . $link->component(), ['content' => $link])
	@endforeach
</section>