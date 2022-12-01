<?php


namespace App\Storyblok;

use Riclep\Storyblok\Block as BaseBlock;

class Block extends BaseBlock
{

	use \Riclep\StoryblokCss\Traits\CssClasses;

	/**
	 * Returns the HTML comment required for making this Block clickable in
	 * Storyblok’s visual editor. Don’t forget to set comments to true in
	 * your Vue.js app configuration.
	 *
	 * @return string
	 */
//	public function editorLink() {
//		if (array_key_exists('_editable', $this->_meta)) {
//			return $this->_meta['_editable'];
//		}
//
//		return '';
//
//		//return $this->_meta['_editable'] ??= '';
//	}

//
//	public function liveField($field) {
//		if (config('storyblok.edit_mode')) {
//			return '{{ liveData.' . $field . '}}';
//		}
//
//		return $this->{$field};
//	}
//
//	public function liveAttribute($field) {
//		if (config('storyblok.edit_mode')) {
//			return 'liveData.' . $field;
//		}
//
//		return $this->{$field};
//	}
}