<?php


namespace App\Storyblok\Blocks;


use Riclep\Storyblok\Fields\DateTime;
use Riclep\Storyblok\Fields\Textarea;
use Riclep\Storyblok\Traits\AppliesTypography;

class Episode extends \App\Storyblok\Block
{
	use AppliesTypography;

	protected $casts = [
		'date' => DateTime::class,
		'transcript' => Textarea::class,
	];

	protected $applyTypography = ['title', 'subtitle'];

	public function theme() {
		return $this->theme[0] ?? null;
	}

	public function getDateAttribute() {
		return strtoupper($this->content()['date']->content()->format('j M Y'));
	}

	public function getPublishedDateStringAttribute() {
		return strtoupper($this->content()['date']->content()->format('Y-m-d'));
	}
}