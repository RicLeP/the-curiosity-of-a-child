<?php


namespace App\Storyblok\Fields;



class Image extends \Riclep\Storyblok\Fields\Image
{
	public function getDesktopImageAttribute()
	{
		return str_replace('//a.storyblok.com', '//img2.storyblok.com/1600x0/filters:quality(40):focal(' . $this->focus . ')', $this->filename);
	}

	public function getMobileImageAttribute()
	{
		return str_replace('//a.storyblok.com', '//img2.storyblok.com/800x500/filters:quality(40):focal(' . $this->focus . ')', $this->filename);
	}

	public function getAltAttribute() {
		return $this->content['alt'] ?: $this->title;
	}
}