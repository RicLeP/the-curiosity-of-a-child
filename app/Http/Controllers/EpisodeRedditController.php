<?php


namespace App\Http\Controllers;

use Riclep\Storyblok\StoryblokFacade as StoryBlok;

class EpisodeRedditController extends Controller
{

	public function show($slug)
	{
		return view('pages.reddit', [
			'story' => Storyblok::read('episodes/' . $slug)
		]);
	}

}