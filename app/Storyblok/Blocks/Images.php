<?php


namespace App\Storyblok\Blocks;


use App\Storyblok\Assets\Image;
use App\Storyblok\DefaultBlock;

class Images extends DefaultBlock
{
	protected function preTransform() {
		$this->content->transform(function ($image) {
			$image['fieldtype'] = 'asset';
			$image['component'] = 'gallery_image';
			return $image;
		});
	}
}