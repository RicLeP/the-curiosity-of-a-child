<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Riclep\Storyblok\StoryblokFacade as StoryBlok;

class SocialGraceController extends Controller
{
    public function show($slug) {
		return view('social.social-grace', [
			'story' => Storyblok::read($slug),
		]);
    }
}
