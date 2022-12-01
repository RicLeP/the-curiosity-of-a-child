<?php


namespace App\Storyblok\Blocks;



use Riclep\Storyblok\Fields\Textarea;

class Quote extends \App\Storyblok\Block
{
	protected array $_casts = [
		'quote' => Textarea::class,
	];
}