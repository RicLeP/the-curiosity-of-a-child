<?php


namespace App\Storyblok\Blocks;


use OzdemirBurak\Iris\Color\Hex;

class Theme extends \App\Storyblok\Block
{
	public function theme() {
		$fromHex = new Hex(($this->from ?: '#043430'));
		$fromRgba = $fromHex->toRgba();
		$fromRgbaAlpha = $fromHex->toRgba()->alpha(0);

		$toHex = new Hex($this->to ?: '#041f34');
		$toRgba = $toHex->toRgba();
		$toRgbaAlpha = $toRgba->toRgba();

		return [
			'from_alpha' => $fromRgbaAlpha,
			'from' => $fromRgba,
			'to_alpha' => $toRgbaAlpha,
			'to' => $toRgba,
		];
	}

	public function __toString()
	{
		$colours = $this->theme();

		$backgroundImage = $this->texture->filename ?: 'https://a.storyblok.com/f/87028/1500x4004/928cf6cb1c/bg-texture-1.jpg';

		return '--theme-from-alpha: ' . $colours['from_alpha'] . '; ' . '--theme-from: ' . $colours['from'] . '; ' . '--theme-to-alpha: ' . $colours['to_alpha'] . '; ' . '--theme-to: ' . $colours['to'] . '; --theme-texture: url(' . $backgroundImage . ');';
	}
}