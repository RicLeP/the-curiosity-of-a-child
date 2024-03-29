<?php

namespace App\SocialGraces;

class EpisodeManner extends \Riclep\SocialGraces\Manner
{
	protected $dimensions = [1200, 628];

	/**
	 * @var Wnx\SidecarBrowsershot\BrowsershotLambda to use Browsershot or BrowsershotLambda
	 */
	protected $driver = \Wnx\SidecarBrowsershot\BrowsershotLambda::class;
}