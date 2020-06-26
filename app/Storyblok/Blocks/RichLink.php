<?php


namespace App\Storyblok\Blocks;


class RichLink extends \App\Storyblok\DefaultBlock
{
	public function getLinkAttribute()
	{
		return $this->content()['link']->url;
	}

	public function getImageAttribute()
	{
		return $this->content()['image']->filename;
	}
}