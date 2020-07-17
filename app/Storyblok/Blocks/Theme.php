<?php


namespace App\Storyblok\Blocks;


use OzdemirBurak\Iris\Color\Hex;

class Theme extends \App\Storyblok\Block
{
	public function theme() {
		$fromHex = new Hex(($this->from ?: '#f00'));
		$fromRgba = $fromHex->toRgba();
		$fromRgbaAlpha = $fromHex->toRgba()->alpha(0);

		$toHex = new Hex($this->to ?: '#f00');
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

		return '--theme-from-alpha: ' . $colours['from_alpha'] . '; ' . '--theme-from: ' . $colours['from'] . '; ' . '--theme-to-alpha: ' . $colours['to_alpha'] . '; ' . '--theme-to: ' . $colours['to'] . ';';
	}
}