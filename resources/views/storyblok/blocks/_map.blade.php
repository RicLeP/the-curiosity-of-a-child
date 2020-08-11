

{!! $content->editorLink() !!}
<div>
	<gmap-map
			:center="{lat:{{ $content->latitude }}, lng:{{ $content->longitude }}}"
			:zoom="{{ $content->zoom }}"
			map-type-id="{{ $content->style }}"
			class="map"
	></gmap-map>
</div>

