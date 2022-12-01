<?php


namespace App\Storyblok\Blocks;


use Riclep\StoryblokTypography\Traits\AppliesTypography;

class Home extends \App\Storyblok\Block
{
	use AppliesTypography;

	protected array $applyTypography = ['title'];

	public function theme()
	{
		return $this->theme[0];
	}
}