<?php
//dd($content->image);
?>

<picture>
	<source srcset="{{ $content->image->desktop_image }}" media="(min-width: 700px)">
	<img src="{{ $content->image->mobile_image }}" class="u-w background-cover feature__hero-image" alt="{{ $content->image->alt }}">
</picture>


<h3 class="t-2 feature__title">
	{!! $title !!}
</h3>
