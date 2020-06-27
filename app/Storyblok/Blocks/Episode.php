<?php


namespace App\Storyblok\Blocks;


class Episode extends \App\Storyblok\DefaultBlock
{
	protected $autoParagraphs = ['intro'];
	protected $dates = ['date'];

	public function getFormattedDateAttribute()
	{
		return $this->content()['date']->format('j F Y');
	}
}