<?php


namespace App\Http\Controllers;


use App\Storyblok\Folder;
use Printful\PrintfulApiClient;
use Riclep\Storyblok\StoryblokFacade as StoryBlok;

class EpisodeController extends Controller
{

	public function index() {
		$folder = new Folder();
		$folder->slug('episodes');

		dd($folder->read());
	}

	public function show($slug)
	{
		/*$products = new PrintfulApiClient('gfjf1tvy-3kmh-jmrd:f9ou-cdijr018fa07');
		$p = $products->get('/warehouse/products');

		dd($p);*/

		return Storyblok::read($slug, ['linked_links.links'])->render();
	}

}