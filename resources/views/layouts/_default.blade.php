
@extends('_core._html')

@section('meta')
	<meta property="description" content="">

	<meta property="og:title" content="">
	<meta property="og:site_name" content="">
	<meta property="og:url" content="">
	<meta property="og:description" content="">
	<meta property="og:type" content="website">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@">
	<meta name="twitter:title" content="">
	<meta name="twitter:description" content="">
@stop

@section('body')
	<div id="app">
		@include('partials._header')

		@yield('content')

		@include('partials._footer')
	</div>
@endsection