<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Request;

class EpisodeUrlShortenerController extends Controller
{

	public function index(Request $request, $episode) {
		$storyblokClient = resolve('Storyblok\Client');

		$storyblokClient =  $storyblokClient->getStories([
			'filter_query' => ['number' => ['in' => $episode]]
		]);

		$body = $storyblokClient->getBody();

		if (!count($body['stories'])) {
			return redirect('/', 307);
		}

		return redirect($body['stories'][0]['full_slug'], 301);
	}
}