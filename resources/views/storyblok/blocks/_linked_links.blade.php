

{!! $content->editLink() !!}
<section class="@if (!$content->getLayout()) l-episode__centre @endif">
	@foreach($content->links as $link)
		@include('storyblok.blocks._' . $link->component(), ['content' => $link])
	@endforeach
</section>
