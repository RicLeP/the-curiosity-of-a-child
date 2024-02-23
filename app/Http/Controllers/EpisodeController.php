<?php


namespace App\Http\Controllers;


use App\SocialGraces\EpisodeManner;
use App\Storyblok\Folder;
use App\Storyblok\Folders\Episodes;
use Illuminate\Http\Request;
use Riclep\Storyblok\StoryblokFacade as StoryBlok;

class EpisodeController extends Controller
{

	public function index(Request $request) {

        $episodes = new Episodes();
        $episodes->settings([
            'page' => (int)$request->get('page') ?: 1,
        ]);



		return Storyblok::read('home')->render([
			'episodes' => $episodes->read(),
		]);
	}

	public function show($slug)
	{
		/*$products = new PrintfulApiClient('gfjf1tvy-3kmh-jmrd:f9ou-cdijr018fa07');
		$p = $products->get('/warehouse/products');

		dd($p);*/

		//dd(config('social-graces.chromium_arguments'));

		return Storyblok::read($slug, ['linked_links.links'])->render([
			'manner' => new EpisodeManner(),
		]);
	}

	public function live(Request $request, $slug)
	{
		/*$products = new PrintfulApiClient('gfjf1tvy-3kmh-jmrd:f9ou-cdijr018fa07');
		$p = $products->get('/warehouse/products');

		dd($p);*/
//dd($request->get('data')['story']);
		return Storyblok::setData($request->get('data')['story'])->render();
	}


	/**
	 * ################### fpr Storyblok
	 * Reads the requested story from the API
	 *
	 * @param $slug
	 * @param null $resolveRelations
	 * @return mixed
	 * @throws \Storyblok\ApiException

	public function setData($data) {
		$response = $data;

		$class = $this->getChildClassName('Page', $response['content']['component']);

		return new $class($response);
	}
*/
}
