<?php


namespace App\Storyblok\Blocks;


use Riclep\Storyblok\Traits\AppliesTypography;

/**
 * Class representation for Storyblok feature component.
 *
 * @property-read array hero
 * @property-read string title
 * @property-read array body
 * @property-read array theme
 */
class Feature extends \App\Storyblok\Block
{
	use AppliesTypography;

	protected $applyTypography = ['title'];

	public function theme() {
		return $this->theme[0];
	}
}