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

	/*	$header = $csv->getHeader(); //returns the CSV header record
		$records = collect($csv->getRecords()); //returns all the CSV records as an Iterator object
*/
		$records = collect($csv->getRecords())->slice(5)->reverse()->transform(function ($record) {
			$record['HASH_TAGS'] = '#Podcast #' . collect(explode(',', $record['TAGS_KEYWORD']))->transform(function ($tag) {
					return Str::studly($tag);
				})->implode(' #');

			return $record;
		});

	//	dd($records);

		return view('polybook', [
			'records' => $records,
		]);
	}

}