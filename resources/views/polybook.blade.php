<?php
//	dd($records[7]);
?>


@foreach ($records as $key => $record)

	<p>{{ $record['SUMMARY'] }}</p>

	<p><a href="{{ $record['URL'] }}" target="_blank">{{ $record['URL'] }}</a></p>

	<p>@polybookapp:</p>

	<p>--{{ $record['TITLE'] }}--</p>

	<p>{{ $record['SHARE_LINK'] }}</p>

	<p>{{ $record['HASH_TAGS'] }}</p>

	<p>{{ $record['DATE_START'] }} - {{ $record['DATE_END'] }}</p>

	<p>{{ $record['LOCATION'] }}</p>

	<hr>

@endforeach