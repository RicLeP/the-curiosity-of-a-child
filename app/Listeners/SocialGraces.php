<?php

namespace App\Listeners;


use App\SocialGraces\EpisodeManner;
use Riclep\Storyblok\Events\PublishingEvent;
use Riclep\Storyblok\StoryblokFacade as StoryBlok;

class SocialGraces
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
	public function handle(PublishingEvent $event)
    {
	    preg_match('#\((.*?)\)#', $event->webhookPayload['text'], $slug);
	    $manner = new EpisodeManner();
	    $manner->source($slug[1])->please();
    }
}
