

@foreach($content as $section)
	@include('storyblok.blocks._' . $section->component(), ['content' => $section])
@endforeach