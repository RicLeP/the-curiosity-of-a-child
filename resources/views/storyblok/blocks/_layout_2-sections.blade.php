

<div class="l-2-sections">
	@foreach($content->content() as $section)
		@include('storyblok.blocks._' . $section->component(), ['content' => $section])
	@endforeach
</div>