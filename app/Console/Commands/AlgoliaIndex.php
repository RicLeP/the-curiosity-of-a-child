<?php

namespace App\Console\Commands;

use Algolia\AlgoliaSearch\SearchClient;
use App\Storyblok\Folders\Episodes;
use Illuminate\Console\Command;

class AlgoliaIndex extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'algolia:index';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Indexes the site in Algolia';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
	    $folder = new Episodes();
	    $folder->slug('episodes');

	    $client = SearchClient::create(
		    config('algolia.application_id'),
		    config('algolia.api_key'),
	    );

	    $index = $client->initIndex(config('algolia.index'));


	    $folder->read()->each(function ($episode) use ($index) {
			$payload = [
				'name' => $episode->meta('name'),
				'title' => $episode->title . ' ' . $episode->subtitle,
				'intro' => $episode->intro,
				'slug' => $episode->meta('slug'),
				'transcript' => $episode->transcript->content(),
			];

		    $index->saveObject($payload, ['objectIDKey' => 'slug']);
	    });
    }
}
