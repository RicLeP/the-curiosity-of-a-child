<?php


namespace App\Storyblok\Assets;


class GalleryImage extends \App\Storyblok\DefaultAsset
{
	/*public function getDesktopImageAttribute()
	{
		return str_replace('//a.storyblok.com', '//img2.storyblok.com/1600x990/filters:quality(40):focal(' . $this->focus . ')', $this->filename);
	}

	public function getMobileImageAttribute()
	{
		return str_replace('//a.storyblok.com', '//img2.storyblok.com/1000x800/filters:quality(40):focal(' . $this->focus . ')', $this->filename);
	}

	public function getAltAttribute() {
		return $this->content['alt'] ?: $this->title;
	}*/
}