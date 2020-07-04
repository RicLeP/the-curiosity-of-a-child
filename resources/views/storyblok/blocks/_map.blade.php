
<div>
	<gmap-map
			:center="{lat:{{ $content->latitude }}, lng:{{ $content->longitude }}}"
			:zoom="{{ $content->zoom }}"
			map-type-id="{{ $content->style }}"
			style="width: 370px; height: 370px"
	></gmap-map>
</div>

