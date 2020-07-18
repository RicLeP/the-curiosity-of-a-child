
{!! $content->editLink() !!}
<div class="l-2-sections @if (!$content->getLayout()) {{ $content->style }} @endif">
	@include('storyblok.blocks._section_1', ['content' => $content->section_1])
	@include('storyblok.blocks._section_2', ['content' => $content->section_2])
</div>