<?php

namespace App\Listeners;


use App\SocialGraces\EpisodeManner;
use Riclep\Storyblok\Events\PublishingEvent;

class SocialGraces
{
	/**
	 * Handle the event.
	 *
	 * @param PublishingEvent $event
	 * @return void
	 */
	public function handle(PublishingEvent $event)
	{
		preg_match('#\((.*?)\)#', $event->webhookPayload['text'], $slug);
		$manner = new EpisodeManner();
		$manner->source(route('manner', $slug[1]))->please();
	}
}
