<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Riclep\Storyblok\Events\StoryblokPublished;
use Riclep\Storyblok\Events\StoryblokUnpublished;
use Riclep\Storyblok\Listeners\ClearCache;

class EventServiceProvider extends ServiceProvider
{
	/**
	 * The event listener mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
		StoryblokPublished::class => [
			ClearCache::class
		],
		StoryblokUnpublished::class => [
			ClearCache::class
		]
	];

	/**
	 * Register any events for your application.
	 *
	 * @return void
	 */
	public function boot()
	{
		parent::boot();

		//
	}
}
