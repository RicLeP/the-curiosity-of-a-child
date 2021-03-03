<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use League\Csv\Reader;

class PolybookController extends Controller
{
	public function index(Request $request)
	{
		$csv = Reader::createFromPath(storage_path('polybook.csv'), 'r');
		$csv->setHeaderOffset(0);

		$records = collect($csv->getRecords())->slice(5)->reverse()->transform(function ($record) {
			$record['HASH_TAGS'] = '#Podcast #' . collect(explode(',', $record['TAGS_KEYWORD']))->transform(function ($tag) {
					return Str::studly($tag);
				})->implode(' #');

			$record['URL'] = 'https://thecuriosityofachild.com/ep/' . (int) filter_var($record['SOURCE'], FILTER_SANITIZE_NUMBER_INT);

			return $record;
		});

		return view('polybook', [
			'records' => $records,
		]);
	}

}