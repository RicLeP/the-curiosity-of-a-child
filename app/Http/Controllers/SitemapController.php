<?php


namespace App\Http\Controllers;


use App\Storyblok\Folders\Episodes;

class SitemapController extends Controller
{

	public function index() {
		$folder = new Episodes();
		$folder->settings(['per_page' => 50]);
		$folder->slug('episodes');

		return view('sitemap', [
			'episodes' => $folder->read(),
		]);

	}
}