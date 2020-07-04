<?php


namespace App\Storyblok\Assets;


class Image extends \App\Storyblok\DefaultAsset
{
	public function getDesktopImageAttribute()
	{
		return str_replace('//a.storyblok.com', '//img2.storyblok.com/1600x0/filters:quality(40):focal(' . $this->focus . ')', $this->filename);
	}

	public function getAltAttribute() {
		return $this->content['alt'] ?: $this->title;
	}
}