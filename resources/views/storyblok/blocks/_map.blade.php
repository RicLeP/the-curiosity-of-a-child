
<div>
	<gmap-map
			:center="{lat:{{ $content->latitude }}, lng:{{ $content->longitude }}}"
			:zoom="{{ $content->zoom }}"
			map-type-id="{{ $content->style }}"
			style="width: 300px; height: 300px"
	></gmap-map>
</div>

