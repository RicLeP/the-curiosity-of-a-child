<?php


namespace App\Http\Controllers;


use Printful\PrintfulApiClient;
use Riclep\Storyblok\StoryblokFacade as StoryBlok;

class EpisodeController extends Controller
{

	public function show($slug = 'home')
	{
		/*$products = new PrintfulApiClient('gfjf1tvy-3kmh-jmrd:f9ou-cdijr018fa07');
		$p = $products->get('/warehouse/products');

		dd($p);*/

		return Storyblok::bySlug($slug)->read()->render();
	}

}