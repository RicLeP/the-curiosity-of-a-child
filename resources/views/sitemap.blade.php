<?php

//dd($episodes);
?>

<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc>https://thecuriosityofachild.com</loc>
		<lastmod>{{ $episodes->stories[0]->meta('updated_at')->format('Y-m-d') }}</lastmod>
		<priority>0.8</priority>
		<changefreq>weekly</changefreq>
	</url>
	@foreach($episodes->stories as $episode)
		<url>
			<loc>https://thecuriosityofachild.com/{{ $episode->meta('slug') }}</loc>
			<lastmod>{{ $episode->meta('updated_at')->format('Y-m-d') }}</lastmod>
			<changefreq>monthly</changefreq>
		</url>
	@endforeach
</urlset>