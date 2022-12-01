<?php


namespace App\Storyblok\Blocks;


use Riclep\Storyblok\Fields\DateTime;
use Riclep\Storyblok\Fields\Textarea;
use Riclep\StoryblokTypography\Traits\AppliesTypography;

/**
 * Class representation for Storyblok episode component.
 *
 * @property-read string teaser_image
 * @property-read array hero
 * @property-read string title
 * @property-read string subtitle
 * @property-read string intro
 * @property-read array features
 * @property-read array listen_links
 * @property-read array links
 * @property-read string trailer
 * @property-read string emoji
 * @property-read string date
 * @property-read string number
 * @property-read array theme
 * @property-read string tab-027d0b2c-17f8-4b41-ba34-f6170308a0c5
 * @property-read string transcript
 * @property-read string mp3_url
 * @property-read string duration
 */
class Episode extends \App\Storyblok\Block
{
	use AppliesTypography;

	protected array $_casts = [
		'date' => DateTime::class,
		'transcript' => Textarea::class,
	];

	protected array $applyTypography = ['title', 'subtitle'];

	public function theme() {
		return $this->theme[0] ?? null;
	}

	public function getFormattedDateAttribute() {
		return strtoupper($this->content()['date']->content()->format('j M Y'));
	}

	public function getPublishedDateStringAttribute() {
		return strtoupper($this->content()['date']->content()->format('Y-m-d'));
	}
}