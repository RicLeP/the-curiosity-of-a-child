<?php


namespace App\Storyblok\Blocks;


use Riclep\Storyblok\Fields\DateTime;
use Riclep\Storyblok\Traits\AppliesTypography;

class Episode extends \App\Storyblok\Block
{
	use AppliesTypography;

	protected $casts = [
		'date' => DateTime::class
	];

	protected $applyTypography = ['title', 'subtitle'];

	public function theme() {
		return $this->theme[0];
	}

	public function getDateAttribute() {
		return strtoupper($this->content()['date']->content()->format('j M Y'));
	}


}