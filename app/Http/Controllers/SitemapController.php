<?php


/*

Christian Zoppi — Today at 14:58
oh, I get what you mean! Let's say you have the team_member content type and you have the services field of type multi-option with stories from the content type services. You already know how to get services from team members but to get the other way around you can query team members you can use this https://www.storyblok.com/docs/api/content-delivery/v2#filter-queries/operation-any-in-array querying the stories endpoint like this https://www.storyblok.com/docs/api/content-delivery/v2#core-resources/stories/retrieve-multiple-stories
"content_type" => "team_member",
"filter_query" =>  [
    "services" =>  [
      "any_in_array" =>  "the-UUID-of-your-service"
    ]
  ]

 * */
namespace App\Http\Controllers;


use App\Storyblok\Folders\Episodes;
use Illuminate\Support\Str;

class SitemapController extends Controller
{

	public function index() {
		$storyblokClient = resolve('Storyblok\Client');

		// single item
		// staff uuid: 428f6684-53b1-4503-81b6-c9f9702d2a87   - key_contact
		// office uuid: 8b9b0820-10cc-4b4d-9132-06228ac3efc5  - contact_point
		// faq uuid: af049d5a-056c-4fc5-99e6-0078353c4c15  - faqs

		// multi item
		// product uuid: 04bb8cb2-f740-4ec5-a943-a62d6cc417fe

		/*$stories = $storyblokClient->getStories([
			"content_type" => "simple-product",
			"filter_query" =>  [
				"title" =>  [
					"in" => "Pensions for International Clients"
				]
			]
		]);*/


/*
		// single item
		$stories = $storyblokClient->getStories([
			"content_type" => "product",
			"filter_query" =>  [
				"contact_point" =>  [ // relationship name
					"is" => "8b9b0820-10cc-4b4d-9132-06228ac3efc5" // known page
				]
			]
		]);
*/

		// multiple items
		$stories = $storyblokClient->getStories([
			"content_type" => "product",
			"filter_query" =>  [
				"faqs" =>  [ // relationship name
					"exists" => "af049d5a-056c-4fc5-99e6-0078353c4c15" // known page
				]
			]
		]);




		dd($stories->getBody());

		$links = collect($storyblokClient->getLinks()->responseBody['links'])->filter(function($item) {
			//return !Str::contains($item['slug'], 'people');
			return Str::contains($item['slug'], 'staff');
		})->filter(function($item) {
			return !Str::contains($item['slug'], 'updates-and-news');
		})->take(10)->transform(function ($item, $uuid) use ($storyblokClient) {
			$story = $storyblokClient->resolveRelations('team.people')->getStoryByUuid($uuid);
			dd($item, $story);
			$item['links'] = $story;
			return $item;
		})->dd();


		/*
		$folder = new Episodes();
		$folder->settings(['per_page' => 50]);
		$folder->slug('episodes');

		return view('sitemap', [
			'episodes' => $folder->read(),
		]);*/

	}
}