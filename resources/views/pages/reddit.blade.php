<?php
//dd($story->meta());
?>

[HISTORY/SCIENCE/STORYTELLING] The Curiosity of a Child | Episode {{ $story->number }}

[{!! $story->title !!} {!! $story->subtitle !!}]({{ route('episode.show', $story->meta('slug')) }})

SFW

@foreach($story->listen_links[0] as $key => $listen_link)[{{ ucwords(str_replace('_', ' ', $key)) }}]({{ $listen_link }})@if (!$loop->last) //@endif @endforeach


{{ $story->intro }}

A father and son, aged 11, discuss things they are curious about from science and history to monsters and games. We look at the quirky and unusual from around the world as well as seeking out local history, events and characters. We keep it friendly and embrace what we discover - the world is an amazing, curious place.

[Website](https://thecuriosityofachild.com/) // [Twitter](https://twitter.com/curichildpod) // [Instagram](https://www.instagram.com/curichildpod/) // [Facebook](https://www.facebook.com/curichildpod/)