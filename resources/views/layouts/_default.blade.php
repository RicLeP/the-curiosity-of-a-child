
@extends('_core._html')

@section('title')
	The Curiosity of a Child Podcast
@stop


@section('meta')
	<meta property="description" content="A father and son discuss things they are curious about from science and history to monsters and games. We look at the quirky and unusual from around the world as well as seeking out local history, events and characters.">

	<meta property="og:title" content="The Curiosity of a Child Podcast">
	<meta property="og:site_name" content="The Curiosity of a Child Podcast">
	<meta property="og:url" content="https://thecuriosityofachild.com/">
	<meta property="og:description" content="A father and son discuss things they are curious about from science and history to monsters and games. We look at the quirky and unusual from around the world as well as seeking out local history, events and characters. ">
	<meta property="og:type" content="website">
	<meta property="og:image" content="{{ asset('img/twitter-default.png') }}">
	<meta property="og:locale" content="en_GB">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@curichildpod">
	<meta name="twitter:creator" content="@curichildpod">
	<meta name="twitter:title" content="The Curiosity of a Child Podcast">
	<meta name="twitter:text:title" content="The Curiosity of a Child Podcast">
	<meta name="twitter:description" content="A father and son discuss things they are curious about from science and history to monsters and games. We look at the quirky and unusual from around the world as well as seeking out local history, events and characters.">
    <meta name="twitter:image" content="{{ asset('img/twitter-default.png') }}">
	<meta name="twitter:image:alt" content="The Curiosity of a Child Podcast">
@stop

@section('body')
	<div id="app" class="bgc-black">
		@include('partials._header')

		<div id="live">
		@yield('content')
		</div>

		@include('partials._footer')
	</div>
@endsection
