<?php
//	dd($records[7]);
?>


@foreach ($records as $key => $record)

	<p>{{ $record['SUMMARY'] }}</p>

	<p>{{ $record['URL'] }}</p>

	<p>@polybookapp note below:</p>

	<p>--{{ $record['TITLE'] }}--</p>

	<p>{{ $record['SHARE_LINK'] }}</p>

	<p>{{ $record['HASH_TAGS'] }}</p>

	<hr>

@endforeach