<?php
//dd($content);
?>

<img src="{{ asset('img/image-border--2.png') }}" class="u-w background-cover" alt="{{ $content->image->alt }}" style="background-image: url({{ $content->image->filename }})">

<h3 class="t-2 feature__title">
	{{ $title }}
</h3>
