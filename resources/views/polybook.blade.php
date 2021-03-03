<?php
//	dd($records[7]);
?>


@foreach ($records as $key => $record)

	<p>{{ $record['SUMMARY'] }}</p>

	<p><a href="{{ $record['URL'] }}" target="_blank">{{ $record['URL'] }}</a></p>

	<p>@polybookapp note below:</p>

	<p>--{{ $record['TITLE'] }}--</p>

	<p>{{ $record['SHARE_LINK'] }}</p>

	<p>{{ $record['HASH_TAGS'] }}</p>

	<hr>

@endforeach