<?php


namespace App\Storyblok\Blocks;


class YoutubeVideo extends \App\Storyblok\Block
{
	public function getUrlAttribute()
	{
		return str_replace('https://www.youtube.com/watch?v=', 'https://www.youtube.com/embed/', $this->content()['url']->url);
	}
}