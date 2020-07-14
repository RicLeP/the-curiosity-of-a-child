<?php


namespace App\Storyblok\Blocks;


use Riclep\Storyblok\Traits\AppliesTypography;

class Feature extends \App\Storyblok\Block
{
	use AppliesTypography;

	protected $applyTypography = ['title'];

	public function theme() {
		return $this->theme[0];
	}
}