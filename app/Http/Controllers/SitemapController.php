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

class SitemapController extends Controller
{

	public function index() {
		$folder = new Episodes();
		$folder->settings(['per_page' => 50]);
		$folder->slug('episodes')->sort('content.date');

		// return view with xml/application response header type
		return response()->view('sitemap', [
			'episodes' => $folder->read(),
		])->header('Content-Type', 'xml/application');

	}
}